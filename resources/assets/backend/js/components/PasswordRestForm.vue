<template>
    <el-form label-width="100px" class="edit-form">
        <el-form-item class="input" label="旧密码">
            <el-input name="old_password" placeholder=""></el-input>
        </el-form-item>
        <el-form-item class="input" label="新密码">
            <el-input name="password" placeholder=""></el-input>
        </el-form-item>
        <el-form-item class="input" label="确认新密码">
            <el-input name="password_confirmation" placeholder=""></el-input>
        </el-form-item>

        <el-form-item>
            <el-button type="primary">提 交</el-button>
        </el-form-item>
    </el-form>
</template>

<script>
    export default {
        
    }
</script>
