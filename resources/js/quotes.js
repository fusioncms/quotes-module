import routes from './routes'

Fusion.booting((Vue, router, state) => {

	// register routes
	router.addRoutes(routes)
	
	// register fieldtypes
	Vue.component('quote-fieldtype', () => import('@/components/Fieldtypes/Quotes/Field'))
	Vue.component('quote-fieldtype-settings', () => import('@/components/Fieldtypes/Quotes/Settings'))
})


Fusion.booted((vue) => {
	//...
})
