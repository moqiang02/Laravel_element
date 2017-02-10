<template>
    <div id="top_box">
        <div id="menu_bar">
            <el-row class="tac">
                <el-col>
                    <h5>带 icon</h5>
                    <el-menu default-active="2" class="el-menu-vertical-demo" @open="handleOpen" @close="handleClose"
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
            <div id="content_box">11</div>
        </div>
    </div>
</template>
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
        position: absolute;
    }

    #main_box {
        width: 100%;
        position: absolute;
        left: 200px;

        #nav_bar {
            width: 100%;
            height: 60px;
            background-color: #FFFFFF;
        }
    }


</style>