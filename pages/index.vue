<template>
    <div class="bg-dark text-light min-vh-100">
        <!-- Hero Section -->
        <section class="py-5 py-md-7 bg-gradient">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h1 class="display-4 fw-bold mb-4">
                            The Future of <span class="text-success">Blockchain</span> Technology
                        </h1>
                        <p class="lead mb-3 text-light-emphasis">
                            LeiCoin is a modern, open source blockchain project that delivers energy-efficient
                            Proof-of-Stake technology, optimized data compression, and a scalable architecture.
                        </p>
                        <p class="lead mb-4 text-light-emphasis">
                            Join our community of developers and contributors to build the next generation of
                            decentralized applications.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <button class="btn btn-success btn-lg">
                                Get Started
                            </button>
                            <button class="btn btn-outline-success btn-lg">
                                GitHub Repository
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center">
                        <div class="position-relative w-100" style="max-width: 400px;">
                            <div class="position-absolute top-0 start-0 end-0 bottom-0 bg-success opacity-25 rounded-circle"
                                style="filter: blur(70px);"></div>
                            <!-- Placeholder for image -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-5 py-md-6 bg-dark">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Key Features</h2>
                    <p class="lead text-light-emphasis mx-auto" style="max-width: 700px;">
                        LeiCoin combines cutting-edge technology with practical solutions to create an open source
                        blockchain platform that's built for the future.
                    </p>
                </div>

                <div class="row g-4">
                    <!-- Feature 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-dark-subtle border-secondary">
                            <div class="card-body">
                                <div class="bg-success bg-opacity-25 p-3 rounded d-inline-block mb-3">
                                    <Zap class="text-success" width="24" height="24" />
                                </div>
                                <h3 class="card-title h5 fw-semibold">Energy-Efficient PoS</h3>
                                <p class="card-text text-light-emphasis">
                                    Our Proof-of-Stake consensus mechanism drastically reduces energy consumption
                                    compared to
                                    traditional Proof-of-Work systems.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 2 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-dark-subtle border-secondary">
                            <div class="card-body">
                                <div class="bg-success bg-opacity-25 p-3 rounded d-inline-block mb-3">
                                    <Database class="text-success" width="24" height="24" />
                                </div>
                                <h3 class="card-title h5 fw-semibold">Optimized Data Compression</h3>
                                <p class="card-text text-light-emphasis">
                                    Advanced data compression techniques allow for efficient block storage and faster
                                    transaction processing.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 3 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-dark-subtle border-secondary">
                            <div class="card-body">
                                <div class="bg-success bg-opacity-25 p-3 rounded d-inline-block mb-3">
                                    <BarChart class="text-success" width="24" height="24" />
                                </div>
                                <h3 class="card-title h5 fw-semibold">Scalable Architecture</h3>
                                <p class="card-text text-light-emphasis">
                                    Built from the ground up for scalability, LeiCoin can handle increasing transaction
                                    volumes
                                    without compromising performance.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 4 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-dark-subtle border-secondary">
                            <div class="card-body">
                                <div class="bg-success bg-opacity-25 p-3 rounded d-inline-block mb-3">
                                    <Shield class="text-success" width="24" height="24" />
                                </div>
                                <h3 class="card-title h5 fw-semibold">Enhanced Security</h3>
                                <p class="card-text text-light-emphasis">
                                    State-of-the-art cryptographic techniques ensure your transactions and data remain
                                    secure
                                    and tamper-proof.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 5 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-dark-subtle border-secondary">
                            <div class="card-body">
                                <div class="bg-success bg-opacity-25 p-3 rounded d-inline-block mb-3">
                                    <Globe class="text-success" width="24" height="24" />
                                </div>
                                <h3 class="card-title h5 fw-semibold">Global Accessibility</h3>
                                <p class="card-text text-light-emphasis">
                                    Designed for worldwide adoption with low latency and high throughput regardless of
                                    geographic location.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Feature 6 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 bg-dark-subtle border-secondary">
                            <div class="card-body">
                                <div class="bg-success bg-opacity-25 p-3 rounded d-inline-block mb-3">
                                    <Code class="text-success" width="24" height="24" />
                                </div>
                                <h3 class="card-title h5 fw-semibold">Developer-Friendly</h3>
                                <p class="card-text text-light-emphasis">
                                    Comprehensive APIs and development tools make it easy to build decentralized
                                    applications on
                                    the LeiCoin platform.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section id="technology" class="py-5 py-md-6 bg-dark-subtle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <h2 class="display-5 fw-bold mb-4">Advanced Blockchain Technology</h2>
                        <p class="lead mb-4 text-light-emphasis">
                            LeiCoin leverages cutting-edge technology to create a high-performance, decentralized
                            platform that's built for the future.
                        </p>

                        <div class="d-flex mb-3">
                            <div class="bg-success bg-opacity-25 p-2 rounded me-3 mt-1">
                                <Check class="text-success" width="20" height="20" />
                            </div>
                            <div>
                                <h3 class="fw-semibold h5">Proof-of-Stake Consensus</h3>
                                <p class="text-light-emphasis">Energy-efficient validation that reduces carbon footprint
                                    while maintaining security.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="bg-success bg-opacity-25 p-2 rounded me-3 mt-1">
                                <Check class="text-success" width="20" height="20" />
                            </div>
                            <div>
                                <h3 class="fw-semibold h5">Efficient Block Storage</h3>
                                <p class="text-light-emphasis">Optimized data structures that minimize storage
                                    requirements while maximizing throughput.</p>
                            </div>
                        </div>

                        <div class="d-flex mb-3">
                            <div class="bg-success bg-opacity-25 p-2 rounded me-3 mt-1">
                                <Check class="text-success" width="20" height="20" />
                            </div>
                            <div>
                                <h3 class="fw-semibold h5">Scalable Architecture</h3>
                                <p class="text-light-emphasis">Designed to handle increasing transaction volumes without
                                    compromising performance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="bg-dark p-3 rounded border border-secondary">
                            <!-- Placeholder for diagram -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-5 bg-success text-white">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="display-5 fw-bold mb-2">99%</ </div>
                            <div class="text-white-50">Energy Reduction</div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="display-5 fw-bold mb-2">10,000+</div>
                            <div class="text-white-50">Transactions Per Second</div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="display-5 fw-bold mb-2">5M+</div>
                            <div class="text-white-50">Users Worldwide</div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="display-5 fw-bold mb-2">24/7</div>
                            <div class="text-white-50">Network Uptime</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Open Source Section -->
        <section id="about" class="py-5 py-md-6 bg-dark">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Open Source Project</h2>
                    <p class="lead text-light-emphasis mx-auto" style="max-width: 700px;">
                        LeiCoin is a community-driven, open source blockchain project focused on creating a secure,
                        efficient, and future-proof solution.
                    </p>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6 mb-4 mb-md-0">
                        <!-- Placeholder for community image -->
                        <div class="bg-dark-subtle rounded border border-secondary" style="height: 300px;"></div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="h3 fw-bold mb-3">Community-Driven Development</h3>
                        <p class="text-light-emphasis mb-3">
                            LeiCoin was founded with a clear vision: to create a blockchain platform that combines high
                            performance with sustainability. Our open source approach ensures transparency, security,
                            and
                            collaborative innovation.
                        </p>
                        <p class="text-light-emphasis mb-4">
                            We welcome contributions from developers, researchers, and blockchain enthusiasts who share
                            our vision of making blockchain technology accessible to everyone, without compromising our
                            planet's
                            future.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3">
                            <button class="btn btn-success">
                                Contribute on GitHub
                            </button>
                            <button class="btn btn-outline-success">
                                Join Discord Community
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5 py-md-6 bg-success bg-gradient text-white">
            <div class="container text-center">
                <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
                <p class="lead mb-4 mx-auto" style="max-width: 700px;">
                    Join the LeiCoin ecosystem today and be part of the future of blockchain technology.
                </p>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    <button class="btn btn-light btn-lg text-success">
                        Download Wallet
                    </button>
                    <button class="btn btn-outline-light btn-lg">
                        Read Documentation
                    </button>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { Zap, Database, BarChart, Shield, Globe, Code, Check } from 'lucide-vue-next';
</script>

<style>
html {
    scroll-behavior: smooth;
}

.bg-gradient {
    background: linear-gradient(135deg, #212529 0%, #343a40 100%);
}
</style>