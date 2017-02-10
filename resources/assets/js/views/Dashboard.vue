<template>
    <div id="top_box">
        <div id="menu_bar">
            <el-row class="tac">
                <el-col>
                    <h5>带 icon</h5>
                    <el-menu default-active="2" class="el-menu-vertical-demo"
                             theme="dark">
                        <el-submenu index="1">
                            <template slot="title"><i class="el-icon-message"></i>导航一</template>
                            <el-menu-item-group>
                                <template slot="title">分组一</template>
                                <el-menu-item index="1-1">选项1</el-menu-item>
                                <el-menu-item index="1-2">选项2</el-menu-item>
                            </el-menu-item-group>
                            <el-menu-item-group title="分组2">
                                <el-menu-item index="1-3">选项3</el-menu-item>
                            </el-menu-item-group>
                            <el-submenu index="1-4">
                                <template slot="title">选项4</template>
                                <el-menu-item index="1-4-1">选项1</el-menu-item>
                            </el-submenu>
                        </el-submenu>
                        <el-menu-item index="2"><i class="el-icon-menu"></i>导航二</el-menu-item>
                        <el-menu-item index="3"><i class="el-icon-setting"></i>导航三</el-menu-item>
                    </el-menu>
                </el-col>
            </el-row>
            <router-view></router-view>
        </div>
        <div id="main_box">
            <div id="nav_bar">11</div>
            <div id="content_box">
                <el-card class="box-card">
                    <div slot="header" class="clearfix">
                        <span style="line-height: 36px;">卡片名称</span>
                        <el-button style="float: right;" type="primary">操作按钮</el-button>
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
                </el-card>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                tableData: [{
                    date: '2016-05-02',
                    name: '王小虎',
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
                }]
            }
        },
        methods: {
            handleEdit(index, row) {
                console.log(index, row);
                this.tableData[index].name = "zz";
            },
            handleDelete(index, row) {
                this.tableData.splice(index, 1);
            }
        }
    }
</script>

<style lang="sass">
    #top_box {
        width: 100%;
        height: 100%;
        position: fixed;
    }

    #menu_bar {
        background-color: #324157;
        width: 200px;
        height: 100%;

        float: left;

    }

    #main_box {
        height: 100%;
        margin-left: 200px;
    }

    #nav_bar {
        height: 50px;
        background-color: #FFFFFF;
        border-bottom: 1px solid #E6E6E6;
    }

    .box-card {
        width: 90%;
        margin: 50px auto;
    }


</style>