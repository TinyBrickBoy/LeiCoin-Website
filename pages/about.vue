<template>
    <div class="about-page">
        <!-- Hero Section -->
        <section class="about-hero py-5">
            <div class="container">
                <div class="row align-items-center min-vh-50">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 class="display-4 fw-bold mb-4 animate-slide-in">
                            About <span class="gradient-text">LeiCoin</span>
                        </h1>
                        <p class="lead text-secondary mb-5 animate-slide-in" style="animation-delay: 0.2s;">
                            Building the future of decentralized finance with innovative blockchain technology
                        </p>
                        <div class="animate-slide-in" style="animation-delay: 0.4s;">
                            <div class="glow mx-auto" style="width: 100px; height: 3px; background: var(--gradient-primary);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission Section -->
        <section class="py-5 section-dark">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="display-5 fw-bold mb-4">Our Mission</h2>
                        <p class="lead text-secondary mb-4">
                            At LeiCoin, we believe in a future where blockchain technology is accessible, sustainable, 
                            and powerful enough to transform how we interact with digital assets.
                        </p>
                        <p class="text-secondary mb-4">
                            Our mission is to create a blockchain platform that combines cutting-edge technology with 
                            environmental responsibility. We're committed to building a decentralized ecosystem that 
                            doesn't compromise on performance or our planet's future.
                        </p>
                        <div class="d-flex align-items-center">
                            <div class="stat-box me-4">
                                <h3 class="fw-bold gradient-text mb-0">2023</h3>
                                <p class="small text-secondary mb-0">Founded</p>
                            </div>
                            <div class="stat-box me-4">
                                <h3 class="fw-bold gradient-text mb-0">50+</h3>
                                <p class="small text-secondary mb-0">Contributors</p>
                            </div>
                            <div class="stat-box">
                                <h3 class="fw-bold gradient-text mb-0">100%</h3>
                                <p class="small text-secondary mb-0">Open Source</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mission-image-wrapper">
                            <LeicoinLogo class="w-100 animate-float" style="max-width: 400px; opacity: 0.8;" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Values Section -->
        <section class="py-5">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Our Core Values</h2>
                    <p class="lead text-secondary mx-auto" style="max-width: 600px;">
                        These principles guide every decision we make and every line of code we write
                    </p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3" v-for="(value, index) in values" :key="index">
                        <div class="value-card h-100">
                            <div class="value-icon mb-3">
                                <component :is="value.icon" :size="32" />
                            </div>
                            <h4 class="h5 fw-semibold mb-3">{{ value.title }}</h4>
                            <p class="text-secondary small mb-0">{{ value.description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team Section -->
        <section class="py-5 section-dark">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Community Driven</h2>
                    <p class="lead text-secondary mx-auto" style="max-width: 700px;">
                        LeiCoin is built by a global community of developers, researchers, and blockchain enthusiasts
                    </p>
                </div>
                
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="community-card p-5 text-center">
                            <Users :size="60" class="mb-4 text-secondary" />
                            <h3 class="h4 fw-bold mb-3">Join Our Community</h3>
                            <p class="text-secondary mb-4">
                                Whether you're a developer, designer, writer, or just passionate about blockchain technology, 
                                there's a place for you in the LeiCoin community. Join us in building the future of decentralized finance.
                            </p>
                            <div class="d-flex flex-column flex-sm-row gap-3 justify-content-center">
                                <a href="https://github.com/LeiCoin-project/" target="_blank" class="btn btn-gradient">
                                    <Github :size="20" class="me-2" />
                                    Contribute on GitHub
                                </a>
                                <button class="btn btn-outline-gradient">
                                    <MessageCircle :size="20" class="me-2" />
                                    Join Discord
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="display-5 fw-bold mb-4">Get in Touch</h2>
                        <p class="lead text-secondary mb-5">
                            Have questions or want to learn more about LeiCoin? We'd love to hear from you.
                        </p>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="contact-item">
                                    <Mail :size="40" class="mb-3 gradient-text" />
                                    <h5 class="fw-semibold mb-2">Email</h5>
                                    <a href="mailto:contact@leicoin.io" class="text-secondary text-decoration-none">
                                        contact@leicoin.io
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-item">
                                    <Github :size="40" class="mb-3 gradient-text" />
                                    <h5 class="fw-semibold mb-2">GitHub</h5>
                                    <a href="https://github.com/LeiCoin-project/" target="_blank" class="text-secondary text-decoration-none">
                                        LeiCoin-project
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="contact-item">
                                    <MessageCircle :size="40" class="mb-3 gradient-text" />
                                    <h5 class="fw-semibold mb-2">Discord</h5>
                                    <a href="#" class="text-secondary text-decoration-none">
                                        Join our server
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { 
    Heart, Shield, Zap, Users, Github, 
    MessageCircle, Mail, Globe 
} from 'lucide-vue-next';
import LeicoinLogo from '~/components/images/leicoin-logo.vue';

const values = [
    {
        icon: Heart,
        title: 'Community First',
        description: 'We prioritize our community\'s needs and feedback in every decision we make.'
    },
    {
        icon: Shield,
        title: 'Security & Trust',
        description: 'Building a secure platform that users can trust with their digital assets.'
    },
    {
        icon: Zap,
        title: 'Innovation',
        description: 'Constantly pushing the boundaries of what\'s possible with blockchain technology.'
    },
    {
        icon: Globe,
        title: 'Sustainability',
        description: 'Committed to environmental responsibility through energy-efficient solutions.'
    }
];
</script>

<style scoped>
.about-hero {
    padding-top: 100px;
    background: linear-gradient(180deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
}

.min-vh-50 {
    min-height: 50vh;
}

.stat-box {
    padding: 1rem 2rem;
    background: var(--bg-card);
    border-radius: 12px;
    border: 1px solid var(--border-primary);
}

.mission-image-wrapper {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}

.mission-image-wrapper::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 500px;
    height: 500px;
    background: radial-gradient(circle, var(--accent-glow) 0%, transparent 70%);
    transform: translate(-50%, -50%);
    opacity: 0.2;
    z-index: -1;
}

.value-card {
    background: var(--bg-card);
    border: 1px solid var(--border-primary);
    border-radius: 12px;
    padding: 2rem;
    text-align: center;
    transition: all 0.3s ease;
}

.value-card:hover {
    background: var(--bg-hover);
    border-color: var(--accent-primary);
    transform: translateY(-5px);
}

.value-icon {
    width: 70px;
    height: 70px;
    background: var(--gradient-primary);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    color: var(--bg-primary);
}

.community-card {
    background: var(--bg-card);
    border: 1px solid var(--border-primary);
    border-radius: 20px;
    position: relative;
    overflow: hidden;
}

.community-card::before {
    content: '';
    position: absolute;
    top: -50%;
    right: -50%;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle, var(--accent-glow) 0%, transparent 70%);
    opacity: 0.1;
}

.contact-item {
    padding: 2rem;
    background: var(--bg-card);
    border-radius: 12px;
    border: 1px solid var(--border-primary);
    transition: all 0.3s ease;
}

.contact-item:hover {
    border-color: var(--accent-primary);
    transform: translateY(-5px);
}

.contact-item a:hover {
    color: var(--accent-primary) !important;
}

@media (max-width: 768px) {
    .stat-box {
        padding: 0.75rem 1.5rem;
        margin-bottom: 1rem;
    }
    
    .value-card {
        margin-bottom: 1rem;
    }
}
</style>
