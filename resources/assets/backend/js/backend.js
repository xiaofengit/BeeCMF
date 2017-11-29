
/**
 * 加载Javascript依赖
 *
 */

window.Vue = require('vue');

import ElementUI from 'element-ui';

Vue.use(ElementUI);

Vue.component('aside-menu', require('./components/AsideMenu.vue'));

const backend = new Vue({
	el : '#backend'
});
