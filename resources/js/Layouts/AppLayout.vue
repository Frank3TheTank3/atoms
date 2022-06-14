<script setup>
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import { Head, Link } from "@inertiajs/inertia-vue3";
import JetApplicationMark from "@/Jetstream/ApplicationMark.vue";
import JetBanner from "@/Jetstream/Banner.vue";
import JetDropdown from "@/Jetstream/Dropdown.vue";
import JetDropdownLink from "@/Jetstream/DropdownLink.vue";
import JetNavLink from "@/Jetstream/NavLink.vue";
import JetResponsiveNavLink from "@/Jetstream/ResponsiveNavLink.vue";
import AppLogo from "@/components/icons/Logo.vue";

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
</script>

<template>
    <div class="relative">

        <Head :title="title" />

        <div class="absolute top-0 left-0 flex items-center">
            <AppLogo class="w-16 h-16"></AppLogo>
            <div class="text-yellow">Atoms</div>
        </div>

        <div class="absolute top-0 right-0 flex">
            <Link :href="route('register')" class="bg-orange-register rounded-lg w-24 m-2 p-1">
            Register
            </Link>
            <Link :href="route('login')" class="bg-yellow rounded-lg w-24 m-2 p-1">Log-in</Link>
        </div>

        <JetBanner />

        <!-- Page Content -->
        <main class="w-full">
            <div class="bg-image-header min-h-screen">
                <slot name="top" />
            </div>
            <div class="bg-gray-main">
                <slot name="bottom" />
            </div>
        </main>

        <footer class="
                flex flex-row
                justify-between
                bg-black
                absolute
                bottom-0
                w-full
            ">
            <div class="flex items-center">
                <AppLogo class="w-16 h-16"></AppLogo>
                <div class="text-yellow">Atoms</div>
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
