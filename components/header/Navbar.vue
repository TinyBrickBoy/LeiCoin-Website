<script setup lang="ts">
import { NuxtLink } from '#components';
import LeicoinLogo from '../images/leicoin-logo.vue';
import { ref, onMounted, onUnmounted } from 'vue';

const isScrolled = ref(false);

const handleScroll = () => {
  isScrolled.value = window.scrollY > 50;
};

onMounted(() => {
  window.addEventListener('scroll', handleScroll);
});

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll);
});
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top navbar-dark-custom" :class="{ 'scrolled': isScrolled }">
        <div class="container">
            <NuxtLink class="navbar-brand d-flex align-items-center" to="/">
                <LeicoinLogo class="logo animate-pulse" style="width: 45px; height: 45px;" />
                <span class="ms-2 fw-bold gradient-text">LeiCoin</span>
            </NuxtLink>
            
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                    <li class="nav-item">
                        <NuxtLink class="nav-link nav-link-custom" to="/">
                            Home
                        </NuxtLink>
                    </li>
                    <li class="nav-item">
                        <NuxtLink class="nav-link nav-link-custom" to="/about">
                            About
                        </NuxtLink>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-custom external-link" href="https://github.com/LeiCoin-project/" target="_blank">
                            Github
                        </a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <button class="btn btn-gradient btn-sm">
                            Get Started
                        </button>
                    </li>
                </ul>
            </div> 
        </div>
    </nav>
</template>

<style scoped>
.navbar-brand {
    text-decoration: none;
    transition: all 0.3s ease;
}

.navbar-brand:hover {
    transform: translateX(5px);
}

.navbar-brand span {
    font-size: 1.25rem;
    letter-spacing: -0.5px;
}

.nav-link-custom {
    color: var(--text-secondary) !important;
    font-weight: 500;
    padding: 0.5rem 1rem !important;
    margin: 0 0.25rem;
    border-radius: 8px;
    transition: all 0.3s ease;
    position: relative;
}

.nav-link-custom::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0;
    height: 2px;
    background: var(--gradient-primary);
    transform: translateX(-50%);
    transition: width 0.3s ease;
}

.nav-link-custom:hover {
    color: var(--text-primary) !important;
    background: rgba(255, 255, 255, 0.05);
}

.nav-link-custom:hover::after {
    width: 80%;
}

.nav-link-custom.active {
    color: var(--accent-primary) !important;
}

a.external-link::after {
    content: " ↗";
    font-size: 0.75em;
    margin-left: 0.25em;
    display: inline-block;
    color: inherit;
    text-decoration: none;
    transition: transform 0.3s ease;
}

a.external-link:hover::after {
    transform: translate(2px, -2px);
}

.navbar-toggler {
    padding: 0.25rem 0.5rem;
    font-size: 1rem;
}

.navbar-toggler:focus {
    box-shadow: 0 0 0 0.25rem rgba(0, 255, 136, 0.25);
}

@media (max-width: 991px) {
    .navbar-collapse {
        background: rgba(0, 0, 0, 0.95);
        margin-top: 1rem;
        padding: 1rem;
        border-radius: 12px;
        border: 1px solid var(--border-primary);
    }
    
    .nav-link-custom {
        margin: 0.25rem 0;
    }
}
</style>
