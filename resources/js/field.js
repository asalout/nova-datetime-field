Nova.booting((Vue, router, store) => {
  Vue.component('index-datetime-picker', require('./components/IndexField'))
  Vue.component('detail-datetime-picker', require('./components/DetailField'))
  Vue.component('form-datetime-picker', require('./components/FormField'))
})
