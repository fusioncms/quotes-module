export default [
    {
        path: '/quotes',
        component: require('./views/Dashboard').default,
        name: 'quotes',
        meta: {
            requiresAuth: true,
            layout: 'admin'
        }
    },

    {
        path: '/quotes/install',
        component: require('./views/Install').default,
        name: 'quotes.install',
        meta: {
            requiresAuth: true,
            layout: 'admin'
        }
    }
]