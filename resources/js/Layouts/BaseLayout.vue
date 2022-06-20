<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link, usePage } from "@inertiajs/inertia-vue3";
import JetApplicationMark from "@/Jetstream/ApplicationMark.vue";
import JetBanner from "@/Jetstream/Banner.vue";
import JetDropdown from "@/Jetstream/Dropdown.vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink.vue";
import FullLogo from "@/components/FullLogo.vue";

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    Inertia.put(
        route("current-team.update"),
        {
            team_id: team.id,
        },
        {
            preserveState: false,
        }
    );
};

const logout = () => {
    Inertia.post(route("logout"));
};

const showRegLog = () => {
    switch (route().current()) {
        case "login":
        case "register":
            return false;
        default:
            return true;
    }
};

const loggedIn = () => {
    return !!usePage().props.value.user;
};
</script>

<template>
    <div class="relative">
        <Head :title="title" />

        <FullLogo class="absolute top-0 left-0 m-1"></FullLogo>

        <div v-if="showRegLog()" class="absolute top-3 right-3 flex">
            <div v-if="loggedIn()" class="flex gap-5">
                <JetDropdown align="right" width="48">
                    <template #trigger>
                        <div class="text-3xl text-yellow">
                            {{ usePage().props.value.user.name }}
                        </div>
                    </template>

                    <template #content>
                        <!-- Account Management -->
                        <div class="block px-4 py-2 text-xs text-gray-400">
                            Manage Account
                        </div>

                        <JetDropdownLink :href="route('profile.show')">
                            Profile
                        </JetDropdownLink>
                        <JetDropdownLink
                            v-if="$page.props.jetstream.hasApiFeatures"
                            :href="route('api-tokens.index')"
                        >
                            API Tokens API Tokens
                        </JetDropdownLink>

                        <div class="border-t border-gray-100" />

                        <!-- Authentication -->
                        <form @submit.prevent="logout">
                            <JetDropdownLink as="button">
                                Log Out
                            </JetDropdownLink>
                        </form>
                    </template>
                </JetDropdown>
            </div>
            <div v-else class="flex">
                <Link
                    :href="route('register')"
                    class="
                        bg-orange-register
                        rounded-lg
                        w-28
                        m-2
                        p-2
                        px-5
                        hover:bg-orange-200
                    "
                >
                    Register
                </Link>
                <Link
                    :href="route('login')"
                    class="
                        bg-yellow
                        rounded-lg
                        w-28
                        m-2
                        p-2
                        px-5
                        hover:bg-yellow-200
                    "
                >
                    Log-in
                </Link>
            </div>
        </div>

        <JetBanner />

        <!-- Page Content -->
        <main class="w-full">
            <slot name="main" />
        </main>

        <footer
            class="
                flex flex-row
                justify-between
                bg-black
                absolute
                bottom-0
                w-full
            "
        >
            <div class="flex items-center">
                <FullLogo class="m-1"></FullLogo>
            </div>
            <div class="flex text-yellow">
                <div class="flex flex-col mx-3">
                    <div>Copyright</div>
                    <div>News</div>
                    <div>Blog</div>
                </div>
                <div class="flex flex-col mx-3">
                    <div>Contact</div>
                    <div>Impressum</div>
                    <div>ToS</div>
                </div>
            </div>
        </footer>
    </div>
</template>
