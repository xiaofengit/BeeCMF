
/**
 * 加载Javascript依赖
 *
 */

require('./backend-bootstrap');

Vue.component('aside-menu', require('./components/AsideMenu.vue'));
Vue.component('password-reset-form', require('./components/PasswordResetForm'));

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
