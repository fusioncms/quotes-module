export default [
    {
        path: '/quotes',
        component: () => import('@/pages/Quotes/Index'),
        name: 'quotes',
        meta: {
            requiresAuth: true,
            layout: 'admin'
        }
    },
    {
        path: '/quotes/create',
        component: () => import('@/pages/Quotes/Create'),
        name: 'quotes.create',
        meta: {
            requiresAuth: true,
            layout: 'admin'
        }
    },
    {
        path: '/quotes/:quote/edit',
        component: () => import('@/pages/Quotes/Edit'),
        name: 'quotes.edit',
        meta: {
            requiresAuth: true,
            layout: 'admin'
        }
    },
]