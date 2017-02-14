import Dashboard from './views/Dashboard.vue'
import Parent from './views/Parent.vue'

export default [
    {
        path: '/dashboard',
        component: Dashboard,
        //beforeEnter: requireAuth,
        children: [
            {
                path: '/',
                redirect: '/dashboard/customers'
            },
            {
                path: 'home',
                component: require('./views/dashboard/customer/Create.vue')
            },
            {
                path: 'customers',
                component: Parent,
                children: [
                    {
                        path: '/',
                        component: require('./views/dashboard/customer/Customer.vue')
                    },
                    {
                        path: 'create',
                        component: require('./views/dashboard/customer/Create.vue')
                    },
                    {
                        path: ':id/edit',
                        component: require('./views/dashboard/customer/Create.vue')
                    }
                ]
            }
        ]
    }
]

function requireAuth (to, from, next) {
    if (window.User) {
        return next()
    } else {
        return next('/')
    }
}