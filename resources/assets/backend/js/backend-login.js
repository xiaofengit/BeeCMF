
/**
 * 加载Javascript依赖
 *
 */

window.Vue = require('vue');

import ElementUI from 'element-ui';

Vue.use(ElementUI);

const app = new Vue({
	el: "#login",
	data: {
		loginForm: {
			email: '',
			password: '',
			remember: false,
		},
		rules: {
			email: [
				{required: true, message: '请输入登录邮箱', trigger: 'blur'},
				{type: 'email', message: '请输入正确的邮箱地址', trigger: 'blur,change'}
			],
			password: [
				{required: true, message: '请输入密码', trigger: 'blur'}
			]
		},
	},
	methods: {
		submitForm(formName) {
			this.$refs[formName].validate((valid) => {
				if (valid) {
					alert('ok');
				} else {
					console.log('error submit.');
					return false;
				}
			})
		}
	}
});