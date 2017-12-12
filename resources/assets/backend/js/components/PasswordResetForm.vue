<template>
    <el-form label-width="100px" class="edit-form" :model="form" :rules="rules" ref="passwordform">
        <el-form-item prop="old_password" class="input" label="旧密码">
            <el-input v-model="form.old_password" name="old_password" type="password" placeholder=""></el-input>
        </el-form-item>
        <el-form-item prop="password" class="input" label="新密码">
            <el-input v-model="form.password" name="password" type="password" placeholder=""></el-input>
        </el-form-item>
        <el-form-item prop="password_confirmation" class="input" label="确认新密码">
            <el-input v-model="form.password_confirmation" name="password_confirmation" type="password" placeholder=""></el-input>
        </el-form-item>

        <el-form-item>
            <el-button type="primary" @click="sumbitForm('passwordform')" v-loading.lock="loading">提 交</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
    export default {
        data: function() {
            var checkPasswordConfirmation = (rule, value, callback) => {
                if (value !== this.form.password) {
                    callback(new Error('两次输入的密码不一致'));
                }
                callback();
            };
            return {
                loading: false,
                form: {
                    old_password: '',
                    password: '',
                    password_confirmation: ''
                },
                rules: {
                    old_password: [
                        {required: true, message: '请输入旧密码', trigger: 'blur, change'}
                    ],
                    password: [
                        {required: true, min:6, message: '请输入不少于6位的新密码', trigger: 'blur, change'}
                    ],
                    password_confirmation: [
                        {required: true, message: '请输入再次新密码', trigger: 'blur'},
                        {validator: checkPasswordConfirmation, trigger: 'blur, change'}
                    ]
                }
            };
        },
        methods: {
            sumbitForm(formName) {
                if (!this.loading) {
                    console.log(!this.loading)
                    this.$refs[formName].validate((valid) => {
                        console.log(valid);
                        if (valid) {
                            console.log(1);
                            var _v = this;
                            _v.loading = true;

                            // 请求修改密码
                            axios.post('/backend/password/reset', _v.form).then(function(response) {
                                _v.loading = false;
                            })
                            .catch(function(error) {
                                _v.loading = false;
                            });
                        }
                    });
                }
            }
        }
    }
</script>
