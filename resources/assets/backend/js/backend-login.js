
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./backend-bootstrap');

const app = new Vue({
	el: "#login",
	data: {
		loading: false,
		loginForm: {
			email: 'admin@xiaofengit.com',
			password: 'xiaofengit.com',
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
			if (this.loading === false) {
				this.$refs[formName].validate((valid) => {
					if (valid && this.loading===false) {
						var _v = this;

						_v.loading = true;

						axios.post('/backend/login', this.loginForm)
						.then(function(response) {
							_v.loading = false;
							if (response.status == 200) {
								window.location.href = '/backend';
							}
						})
						.catch(function(error) {
							if (error.response) {
								// 请求已发出，但服务器响应的状态码不在 2xx 范围内
								//console.log(error.response.data);
								//console.log(error.response.status);
								//console.log(error.response.headers);
								switch (error.response.status) {
									case 423:
										_v.$message.error('您的操作太频繁，请稍后再试');
										break;
									case 422:
									default:
										_v.$message.error('登录失败，请检查邮箱或者密码');
										break;
								}
							} else {
								// Something happened in setting up the request that triggered an Error
	      						//console.log('Error', error.message);
	      						_v.$message.error(error.message);
							}
							_v.loading = false;
							// console.log(error.config); 
							return false;
						});
					} else {
						//console.log('error submit.');
						return false;
					}
				})
			}
		}
	}
});
