
/**
 * 加载Javascript依赖
 *
 */

window.Vue = require('vue');

import ElementUI from 'element-ui';

Vue.use(ElementUI);

const backend = new Vue({
	el : '#backend'
});