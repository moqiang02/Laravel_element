<template>
    <div>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span style="line-height: 36px;">卡片名称</span>
            </div>
            <div>
                <el-form ref="form" :model="form" label-width="80px">
                    <el-form-item label="姓名">
                        <el-input v-model="form.name"></el-input>
                    </el-form-item>
                    <el-form-item label="地址">
                        <el-input type="textarea" v-model="form.address"></el-input>
                    </el-form-item>
                    <el-form-item>
                        <el-button type="primary" @click="onSubmit">修改</el-button>
                        <el-button>返回</el-button>
                    </el-form-item>
                </el-form>
            </div>
        </el-card>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                form: {},
            }
        },
        created() {
            this.$http.get('/api/customer/' + this.$route.params.id + '/edit')
                .then((response) => {
                    this.form = response.data.data
                })
        },
        methods: {
            onSubmit() {
                this.$http.put('/api/customer/' + this.$route.params.id, this.form)
                    .then((response) => {
                        console.log(response)
                        this.$message({
                            message: '恭喜你，这是一条成功消息',
                            type: 'success'
                        });
                        //this.$router.push('/dashboard/users')
                    }, (response) => {
                        alert(1);
                        console.log(response)
                    });
            },
        }
    }
</script>
