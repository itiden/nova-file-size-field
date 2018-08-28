Nova.booting((Vue, router) => {
    Vue.component('index-fileSize', require('./components/IndexField'));
    Vue.component('detail-fileSize', require('./components/DetailField'));
    Vue.component('form-fileSize', require('./components/FormField'));
})
