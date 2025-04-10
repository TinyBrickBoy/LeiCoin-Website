import tailwindcss from "@tailwindcss/vite";

// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({		compatibilityDate: '2024-11-01',
	devtools: { enabled: true },

	app: {
		head: {
			title: "LeiCoin - Decentralized, fast and secure blockchain",

			charset: "utf-8",
			viewport: "width=device-width, initial-scale=1, maximum-scale=1",

			meta: [
				{ name: "description", content: "LeiCoin - Decentralized, fast and secure blockchain" }
			],
			link: [
				{ rel: "preconnect", href: "https://fonts.googleapis.com" },
				{ rel: "preconnect", href: "https://fonts.gstatic.com", crossorigin: "" },
				{ rel: "stylesheet", href: "https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700;800;900&display=swap" },

				{ rel: 'stylesheet', href: 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' }

				{ rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
			],
			script: [
				{ src: 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', tagPosition: 'bodyClose' }
			]
		}
	},

	components: [
		{
			path: '~/components',
			pathPrefix: false,
		},
	],

	nitro: {
		preset: "cloudflare-pages",

		cloudflare: {
			deployConfig: true,
			nodeCompat: true
		}
	},

	vite: {
		server: {
			allowedHosts: [
				"leicoin.leicraftmc.de",
				"localhost",
				"*.coder.leicraftmc.de"
			]
		},
		plugins:  [
			
		]
	},

	modules: [
		"@nuxt/ui",
		"nitro-cloudflare-dev",
	]

})