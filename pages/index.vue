<template>
    <div>
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="hero-bg-gradient"></div>
            <div class="container">
                <div class="row align-items-center min-vh-100 py-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h1 class="display-3 fw-bold mb-4 animate-slide-in">
                            The Future of <br>
                            <span class="gradient-text glow-text">Blockchain</span> Technology
                        </h1>
                        <p class="lead mb-4 text-secondary animate-slide-in" style="animation-delay: 0.2s;">
                            LeiCoin is a modern, open source blockchain project that delivers energy-efficient
                            Proof-of-Stake technology, optimized data compression, and a scalable architecture.
                        </p>
                        <div class="d-flex flex-column flex-sm-row gap-3 animate-slide-in" style="animation-delay: 0.4s;">
                            <button class="btn btn-gradient btn-lg btn-glow">
                                <span class="me-2">Get Started</span>
                                <ChevronRight :size="20" />
                            </button>
                            <a href="https://github.com/LeiCoin-project/" target="_blank" 
                               class="btn btn-outline-gradient btn-lg">
                                <Github :size="20" class="me-2" />
                                GitHub Repository
                            </a>
                        </div>
                        
                        <!-- Stats Mini -->
                        <div class="row mt-5 g-4 animate-slide-in" style="animation-delay: 0.6s;">
                            <div class="col-4">
                                <div class="text-center text-sm-start">
                                    <h3 class="fw-bold gradient-text mb-0">99%</h3>
                                    <p class="small text-secondary mb-0">Energy Saved</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center text-sm-start">
                                    <h3 class="fw-bold gradient-text mb-0">10k+</h3>
                                    <p class="small text-secondary mb-0">TPS</p>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="text-center text-sm-start">
                                    <h3 class="fw-bold gradient-text mb-0">5M+</h3>
                                    <p class="small text-secondary mb-0">Users</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 d-flex justify-content-center">
                        <div class="position-relative animate-float">
                            <LeicoinLogo class="w-100" style="max-width: 450px; filter: drop-shadow(0 0 50px rgba(0, 255, 136, 0.3));" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-5 section-dark section-pattern">
            <div class="container py-5">
                <div class="text-center mb-5">
                    <h2 class="display-5 fw-bold mb-3">Key Features</h2>
                    <p class="lead text-secondary mx-auto" style="max-width: 700px;">
                        LeiCoin combines cutting-edge technology with practical solutions to create an open source
                        blockchain platform that's built for the future.
                    </p>
                </div>

                <div class="row g-4">
                    <div class="col-md-6 col-lg-4" v-for="(feature, index) in features" :key="index">
                        <div class="card h-100 card-dark feature-card">
                            <div class="card-body p-4">
                                <div class="feature-icon">
                                    <component :is="feature.icon" :size="28" color="#000" />
                                </div>
                                <h3 class="h5 fw-semibold mb-3">{{ feature.title }}</h3>
                                <p class="text-secondary mb-0">{{ feature.description }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Technology Section -->
        <section id="technology" class="py-5">
            <div class="container py-5">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="display-5 fw-bold mb-4">Advanced Blockchain Technology</h2>
                        <p class="lead mb-4 text-secondary">
                            LeiCoin leverages cutting-edge technology to create a high-performance, decentralized
                            platform that's built for the future.
                        </p>

                        <div class="tech-features">
                            <div class="d-flex mb-4" v-for="(tech, index) in technologies" :key="index">
                                <div class="flex-shrink-0">
                                    <div class="icon-circle">
                                        <Check :size="20" />
                                    </div>
                                </div>
                                <div class="ms-3">
                                    <h4 class="h5 fw-semibold mb-2">{{ tech.title }}</h4>
                                    <p class="text-secondary mb-0">{{ tech.description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="code-preview">
                            <div class="code-header">
                                <div class="code-dots">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <span class="code-title">leicoin.js</span>
                            </div>
                            <pre class="code-content"><code>{{ codeExample }}</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="py-5 stats-section">
            <div class="container py-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3" v-for="(stat, index) in stats" :key="index">
                        <div class="stat-item text-center">
                            <component :is="stat.icon" :size="40" class="mb-3 text-secondary" />
                            <div class="stat-number">{{ stat.value }}</div>
                            <div class="text-secondary">{{ stat.label }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="py-5 cta-section">
            <div class="container py-5 text-center">
                <h2 class="display-5 fw-bold mb-4">Ready to Get Started?</h2>
                <p class="lead mb-5 text-secondary mx-auto" style="max-width: 700px;">
                    Join the LeiCoin ecosystem today and be part of the future of blockchain technology.
                </p>
                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3">
                    <button class="btn btn-gradient btn-lg btn-glow">
                        <Wallet :size="20" class="me-2" />
                        Download Wallet
                    </button>
                    <button class="btn btn-outline-gradient btn-lg">
                        <BookOpen :size="20" class="me-2" />
                        Read Documentation
                    </button>
                </div>
                
                <!-- Decorative element -->
                <div class="mt-5 pt-5">
                    <div class="glow mx-auto" style="width: 200px; height: 2px; background: var(--gradient-primary);"></div>
                </div>
            </div>
        </section>
    </div>
</template>

<script setup>
import { 
    Zap, Database, BarChart, Shield, Globe, Code, 
    Check, ChevronRight, Github, Activity, Users, 
    Server, Cpu, Wallet, BookOpen 
} from 'lucide-vue-next';
import LeicoinLogo from '~/components/images/leicoin-logo.vue';

const features = [
    {
        icon: Zap,
        title: 'Energy-Efficient PoS',
        description: 'Our Proof-of-Stake consensus mechanism drastically reduces energy consumption compared to traditional Proof-of-Work systems.'
    },
    {
        icon: Database,
        title: 'Optimized Data Compression',
        description: 'Advanced data compression techniques allow for efficient block storage and faster transaction processing.'
    },
    {
        icon: BarChart,
        title: 'Scalable Architecture',
        description: 'Built from the ground up for scalability, LeiCoin can handle increasing transaction volumes without compromising performance.'
    },
    {
        icon: Shield,
        title: 'Enhanced Security',
        description: 'State-of-the-art cryptographic techniques ensure your transactions and data remain secure and tamper-proof.'
    },
    {
        icon: Globe,
        title: 'Global Accessibility',
        description: 'Designed for worldwide adoption with low latency and high throughput regardless of geographic location.'
    },
    {
        icon: Code,
        title: 'Developer-Friendly',
        description: 'Comprehensive APIs and development tools make it easy to build decentralized applications on the LeiCoin platform.'
    }
];

const technologies = [
    {
        title: 'Proof-of-Stake Consensus',
        description: 'Energy-efficient validation that reduces carbon footprint while maintaining security.'
    },
    {
        title: 'Efficient Block Storage',
        description: 'Optimized data structures that minimize storage requirements while maximizing throughput.'
    },
    {
        title: 'Scalable Architecture',
        description: 'Designed to handle increasing transaction volumes without compromising performance.'
    }
];

const stats = [
    { icon: Activity, value: '99%', label: 'Energy Reduction' },
    { icon: Server, value: '10,000+', label: 'Transactions Per Second' },
    { icon: Users, value: '5M+', label: 'Users Worldwide' },
    { icon: Cpu, value: '24/7', label: 'Network Uptime' }
];

const codeExample = `import { LeiCoin } from 'leicoin-sdk';

// Initialize LeiCoin client
const client = new LeiCoin({
  network: 'mainnet',
  nodeUrl: 'https://node.leicoin.io'
});

// Create transaction
const tx = await client.createTransaction({
  to: '0x742d35Cc6634C0532925a3b844Bc9e7595f6302',
  amount: 100,
  currency: 'LEI'
});

// Sign and broadcast
const result = await client.signAndBroadcast(tx);
console.log('Transaction hash:', result.hash);`;
</script>

<style scoped>
/* Hero background animation */
@keyframes gradient-shift {
    0%, 100% { transform: translate(0, 0) rotate(0deg); }
    33% { transform: translate(30px, -30px) rotate(120deg); }
    66% { transform: translate(-20px, 20px) rotate(240deg); }
}

.hero-bg-gradient {
    animation: gradient-shift 20s ease infinite;
}

/* Icon circle */
.icon-circle {
    width: 40px;
    height: 40px;
    background: var(--gradient-primary);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--bg-primary);
}

/* Code preview */
.code-preview {
    background: var(--bg-card);
    border: 1px solid var(--border-primary);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.5);
}

.code-header {
    background: var(--bg-hover);
    padding: 1rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid var(--border-primary);
}

.code-dots {
    display: flex;
    gap: 8px;
}

.code-dots span {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: var(--border-secondary);
}

.code-dots span:first-child {
    background: #ff5f56;
}

.code-dots span:nth-child(2) {
    background: #ffbd2e;
}

.code-dots span:last-child {
    background: #27c93f;
}

.code-title {
    font-size: 0.875rem;
    color: var(--text-secondary);
}

.code-content {
    margin: 0;
    padding: 1.5rem;
    background: transparent;
    color: var(--accent-primary);
    font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
    font-size: 0.875rem;
    line-height: 1.6;
    overflow-x: auto;
}

/* Stats section */
.stats-section {
    background: var(--bg-secondary);
    position: relative;
    overflow: hidden;
}

.stats-section::before {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, var(--accent-glow) 0%, transparent 70%);
    transform: translate(-50%, -50%);
    opacity: 0.1;
}

/* CTA section */
.cta-section {
    background: linear-gradient(180deg, var(--bg-primary) 0%, var(--bg-secondary) 100%);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .hero-section {
        min-height: auto;
        padding: 2rem 0;
    }
    
    .display-3 {
        font-size: 2.5rem;
    }
    
    .display-5 {
        font-size: 2rem;
    }
    
    .code-preview {
        margin-top: 2rem;
    }
}
</style>
