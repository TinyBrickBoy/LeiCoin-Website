<template>
    <div class="app">
        <Header />
        <main class="content">
            <slot />
        </main>
        <Footer />
    </div>
</template>

<style scoped>
.app {
    font-family: "Rubik", -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    background-color: var(--bg-primary);
    color: var(--text-primary);
    font-size: 16px;
    margin: 0;
    padding: 0; 
    min-height: 100vh;
    word-wrap: break-word;
    display: flex;
    flex-direction: column;
    position: relative;
}

.app::before {
    content: '';
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: 
        radial-gradient(circle at 20% 50%, rgba(0, 255, 136, 0.05) 0%, transparent 50%),
        radial-gradient(circle at 80% 80%, rgba(0, 255, 136, 0.03) 0%, transparent 50%),
        radial-gradient(circle at 50% 20%, rgba(0, 255, 136, 0.02) 0%, transparent 70%);
    pointer-events: none;
    z-index: 0;
}

.content {
    margin-top: 80px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    position: relative;
    z-index: 1;
}

@media (max-width: 768px) {
    .content {
        margin-top: 70px;
    }
}
</style>
