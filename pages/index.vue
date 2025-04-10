<template>
    <div class="font-sans text-gray-200 bg-gray-900 min-h-screen">
        <!-- Hero Section -->
        <section class="py-20 md:py-28 bg-gradient-to-br from-gray-900 to-gray-800">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">
                            The Future of <span class="text-emerald-500">Blockchain</span> Technology
                        </h1>
                        <p class="text-lg mb-4 text-gray-300">
                            LeiCoin is a modern, open source blockchain project that delivers energy-efficient
                            Proof-of-Stake technology,
                            optimized data compression, and a scalable architecture.
                        </p>
                        <p class="text-lg mb-8 text-gray-300">
                            Join our community of developers and contributors to build the next generation of
                            decentralized applications.
                        </p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <button
                                class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                                Get Started
                            </button>
                            <button
                                class="border border-emerald-500 text-emerald-500 hover:bg-gray-800 font-medium py-3 px-6 rounded-lg transition-colors">
                                GitHub Repository
                            </button>
                        </div>
                    </div>
                    <div class="md:w-1/2 flex justify-center">
                        <div class="relative w-full max-w-md">
                            <div class="absolute inset-0 bg-emerald-900 rounded-full opacity-20 blur-3xl"></div>
                            <!-- <img src="/placeholder.svg?height=400&width=400" alt="LeiCoin Blockchain Visualization"
                                class="relative z-0 w-full" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-16 md:py-24 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Key Features</h2>
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                        LeiCoin combines cutting-edge technology with practical solutions to create an open source
                        blockchain platform that's built for the future.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Feature 1 -->
                    <div
                        class="bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-emerald-500 transition-colors">
                        <div class="bg-emerald-900 p-3 rounded-lg inline-block mb-4">
                            <Zap class="h-6 w-6 text-emerald-500" />
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Energy-Efficient PoS</h3>
                        <p class="text-gray-300">
                            Our Proof-of-Stake consensus mechanism drastically reduces energy consumption compared to
                            traditional Proof-of-Work systems.
                        </p>
                    </div>

                    <!-- Feature 2 -->
                    <div
                        class="bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-emerald-500 transition-colors">
                        <div class="bg-emerald-900 p-3 rounded-lg inline-block mb-4">
                            <Database class="h-6 w-6 text-emerald-500" />
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Optimized Data Compression</h3>
                        <p class="text-gray-300">
                            Advanced data compression techniques allow for efficient block storage and faster
                            transaction processing.
                        </p>
                    </div>

                    <!-- Feature 3 -->
                    <div
                        class="bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-emerald-500 transition-colors">
                        <div class="bg-emerald-900 p-3 rounded-lg inline-block mb-4">
                            <BarChart class="h-6 w-6 text-emerald-500" />
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Scalable Architecture</h3>
                        <p class="text-gray-300">
                            Built from the ground up for scalability, LeiCoin can handle increasing transaction volumes
                            without compromising performance.
                        </p>
                    </div>

                    <!-- Feature 4 -->
                    <div
                        class="bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-emerald-500 transition-colors">
                        <div class="bg-emerald-900 p-3 rounded-lg inline-block mb-4">
                            <Shield class="h-6 w-6 text-emerald-500" />
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Enhanced Security</h3>
                        <p class="text-gray-300">
                            State-of-the-art cryptographic techniques ensure your transactions and data remain secure
                            and tamper-proof.
                        </p>
                    </div>

                    <!-- Feature 5 -->
                    <div
                        class="bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-emerald-500 transition-colors">
                        <div class="bg-emerald-900 p-3 rounded-lg inline-block mb-4">
                            <Globe class="h-6 w-6 text-emerald-500" />
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Global Accessibility</h3>
                        <p class="text-gray-300">
                            Designed for worldwide adoption with low latency and high throughput regardless of
                            geographic location.
                        </p>
                    </div>

                    <!-- Feature 6 -->
                    <div
                        class="bg-gray-800 p-6 rounded-xl border border-gray-700 hover:border-emerald-500 transition-colors">
                        <div class="bg-emerald-900 p-3 rounded-lg inline-block mb-4">
                            <Code class="h-6 w-6 text-emerald-500" />
                        </div>
                        <h3 class="text-xl font-semibold mb-3">Developer-Friendly</h3>
                        <p class="text-gray-300">
                            Comprehensive APIs and development tools make it easy to build decentralized applications on
                            the LeiCoin platform.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section id="technology" class="py-16 md:py-24 bg-gray-800">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0 md:pr-10">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Advanced Blockchain Technology</h2>
                        <p class="text-lg mb-6 text-gray-300">
                            LeiCoin leverages cutting-edge technology to create a high-performance, decentralized
                            platform that's built for the future.
                        </p>

                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="bg-emerald-900 p-2 rounded-lg mr-4 mt-1">
                                    <Check class="h-5 w-5 text-emerald-500" />
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg">Proof-of-Stake Consensus</h3>
                                    <p class="text-gray-300">Energy-efficient validation that reduces carbon footprint
                                        while maintaining security.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-emerald-900 p-2 rounded-lg mr-4 mt-1">
                                    <Check class="h-5 w-5 text-emerald-500" />
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg">Efficient Block Storage</h3>
                                    <p class="text-gray-300">Optimized data structures that minimize storage
                                        requirements while maximizing throughput.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div class="bg-emerald-900 p-2 rounded-lg mr-4 mt-1">
                                    <Check class="h-5 w-5 text-emerald-500" />
                                </div>
                                <div>
                                    <h3 class="font-semibold text-lg">Scalable Architecture</h3>
                                    <p class="text-gray-300">Designed to handle increasing transaction volumes without
                                        compromising performance.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="md:w-1/2">
                        <div class="bg-gray-900 p-6 rounded-xl border border-gray-700">
                            <!-- <img src="/placeholder.svg?height=400&width=600" alt="LeiCoin Technology Diagram"
                                class="w-full rounded-lg" /> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-16 bg-emerald-800 text-white">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-bold mb-2">99%</div>
                        <div class="text-emerald-100">Energy Reduction</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">10,000+</div>
                        <div class="text-emerald-100">Transactions Per Second</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">5M+</div>
                        <div class="text-emerald-100">Users Worldwide</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2">24/7</div>
                        <div class="text-emerald-100">Network Uptime</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Open Source Section -->
        <section id="about" class="py-16 md:py-24 bg-gray-900">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Open Source Project</h2>
                    <p class="text-lg text-gray-300 max-w-2xl mx-auto">
                        LeiCoin is a community-driven, open source blockchain project focused on creating a secure,
                        efficient, and future-proof solution.
                    </p>
                </div>

                <div class="flex flex-col md:flex-row items-center">
                    <div class="md:w-1/2 mb-10 md:mb-0">
                        <!-- <img src="/placeholder.svg?height=400&width=600" alt="LeiCoin Community"
                            class="rounded-xl border border-gray-700" /> -->
                    </div>
                    <div class="md:w-1/2 md:pl-10">
                        <h3 class="text-2xl font-bold mb-4">Community-Driven Development</h3>
                        <p class="text-gray-300 mb-6">
                            LeiCoin was founded with a clear vision: to create a blockchain platform that combines high
                            performance with sustainability.
                            Our open source approach ensures transparency, security, and collaborative innovation.
                        </p>
                        <p class="text-gray-300 mb-6">
                            We welcome contributions from developers, researchers, and blockchain enthusiasts who share
                            our vision
                            of making blockchain technology accessible to everyone, without compromising our planet's
                            future.
                        </p>
                        <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                            <button
                                class="bg-emerald-600 hover:bg-emerald-700 text-white font-medium py-3 px-6 rounded-lg transition-colors">
                                Contribute on GitHub
                            </button>
                            <button
                                class="border border-emerald-500 text-emerald-500 hover:bg-gray-800 font-medium py-3 px-6 rounded-lg transition-colors">
                                Join Discord Community
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-16 md:py-24 bg-gradient-to-br from-emerald-800 to-emerald-900 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Get Started?</h2>
                <p class="text-xl mb-8 max-w-2xl mx-auto">
                    Join the LeiCoin ecosystem today and be part of the future of blockchain technology.
                </p>
                <div class="flex flex-col sm:flex-row justify-center space-y-4 sm:space-y-0 sm:space-x-4">
                    <button
                        class="bg-white text-emerald-800 hover:bg-gray-100 font-medium py-3 px-8 rounded-lg transition-colors">
                        Download Wallet
                    </button>
                    <button
                        class="border border-white text-white hover:bg-emerald-700 font-medium py-3 px-8 rounded-lg transition-colors">
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
</style>