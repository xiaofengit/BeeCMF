
/**
 * 加载Javascript依赖
 *
 */

require('./backend-bootstrap');

Vue.component('aside-menu', require('./components/AsideMenu.vue'));

const backend = new Vue({
	el : '#backend',
	data: {
		isCollapse: false,
	},
	methods: {
		menuCollapse: function(event) {
			console.log(111);
		}
	}
});
