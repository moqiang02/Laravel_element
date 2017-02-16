<template>
    <div>
        <el-card class="box-card">
            <div slot="header" class="clearfix">
                <span style="line-height: 36px;">卡片名称</span>
                <router-link to="/dashboard/customers/create">
                    <el-button style="float: right;" type="primary">
                        操作按钮
                    </el-button>
                </router-link>
            </div>
            <el-table :data="tableData" border>
                <el-table-column
                        label="日期"
                        width="330">
                    <template scope="scope">
                        <el-icon name="time"></el-icon>
                        <span style="margin-left: 10px">{{ scope.row.date }}</span>
                    </template>
                </el-table-column>
                <el-table-column
                        label="姓名"
                        width="430">
                    <template scope="scope">
                        <el-popover trigger="hover" placement="top">
                            <p>姓名: {{ scope.row.name }}</p>
                            <p>住址: {{ scope.row.address }}</p>
                            <div slot="reference" class="name-wrapper">
                                <el-tag>{{ scope.row.name }}</el-tag>
                            </div>
                        </el-popover>
                    </template>
                </el-table-column>
                <el-table-column label="操作" align="center">
                    <template scope="scope">
                        <el-button
                                size="small"
                                @click="handleEdit(scope.$index, scope.row)">编辑
                        </el-button>
                        <el-button
                                size="small"
                                type="danger"
                                @click="handleDelete(scope.$index, scope.row)">删除
                        </el-button>
                    </template>
                </el-table-column>
            </el-table>
            <div class="block">
                <el-pagination
                        layout="prev, pager, next"
                        @current-change="handleCurrentChange"
                        :total=total>
                </el-pagination>
            </div>
        </el-card>
    </div>
</template>
<style lang="sass" scope>
    .block {
        text-align: center;
        margin-top: 20px;
    }
</style>
<script>
    export default {
        data() {
            return {
                /*                tableData: [{
                 date: '2016-05-02',
                 name: '王小',
                 address: '上海市普陀区金沙江路 1518 弄'
                 }, {
                 date: '2016-05-04',
                 name: '王小虎',
                 address: '上海市普陀区金沙江路 1517 弄'
                 }, {
                 date: '2016-05-01',
                 name: '王小虎',
                 address: '上海市普陀区金沙江路 1519 弄'
                 }, {
                 date: '2016-05-03',
                 name: '王小虎',
                 address: '上海市普陀区金沙江路 1516 弄'
                 }]*/
                tableData: [],
                total: 0,
            }
        },
        created() {
            this.$http.get('/api/customer?page=1')
                .then((response) => {
//                    console.log(response)
                    this.tableData = response.data.data;
                    this.total = response.data.meta.pagination.total;
                })
        },
        methods: {
            handleEdit(index, row) {
                console.log(index, row);
                this.$router.push('/dashboard/customers/' + index + '/edit')
            },
            handleDelete(index, row) {
                this.tableData.splice(index, 1);
            },
            handleCurrentChange(val) {
                this.currentPage = val;
                this.$http.get('/api/customer?page='+val)
                    .then((response) => {
                        this.tableData = response.data.data;
                    })
            }
        }
    }
</script>
