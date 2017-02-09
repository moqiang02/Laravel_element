<template>
    <div id="top_box">
        <div id="menu_var">
            <el-row>
                <el-col :span="2">
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

        </div>
    </div>
</template>


<style lang="sass">
    $sidebarSize: 250px;
    $sidebarColor: #828e9a;
    $sidebarBar: darken($sidebarColor, 3%);
    /* divider */
    $sidebarRoll: darken($sidebarColor, 8%);

    body {
        overflow-x:hidden;

    }

    /* Toggle Styles */

    #wrapper {
        padding-left: 0;
        transition:all 0.5 s ease;
        #wrapper.toggled {
            padding-left: 250px;

    }
    }

    #sidebar-wrapper {
        z-index: 1000;
        position:fixed;
        left: 250px;
        width: 0;
        height: 100%;
        margin-left: -250px;
        overflow-y:auto;
        background: #4d5e70;
        transition:all 0.5 s ease;

    }

    #wrapper.toggled #sidebar-wrapper {
        width: 250px;

    }

    #page-content-wrapper {
        width: 100%;
        position:absolute;

        .container-fluid {
            .row {
                margin: 15px;

    }

    }
    }

    #wrapper.toggled #page-content-wrapper {
        position:absolute;
        margin-right: -250px;

    }

    @media(max-width: 768px)

    {
    #page-content-wrapper {
        padding-left: 0;
        transition:all 0.5 s ease;

    }
    #wrapper.toggled #page-content-wrapper {
        transition:all 0.5 s ease;
        padding-left: 250px;
        margin-right: -250px;

    }
    }

    @media(min-width

    :
    768

    px

    )
    {
    #wrapper {
        padding-left: 250px;

    }

    #wrapper.toggled {
        padding-left: 0;

    }

    #sidebar-wrapper {
        width: 250px;

    }

    #wrapper.toggled #sidebar-wrapper {
        width: 0;

    }

    #page-content-wrapper {
        position:relative;

    }

    #wrapper.toggled #page-content-wrapper {
        position:relative;
        margin-right: 0;

    }
    }

    .hr {
        margin-left: 1px;
        margin-right: 1px;
        border: 1px solid $sidebarBar;

    }

    .profile {
        margin: 15px auto;
        text-align:center;
        img {
            height: 125px;
            border: 3px solid lightgrey;
            border-radius: 200px;

    }
    h1 {
        margin-top: 10px;
        color:white;
        font-size: 1.3em;

    }
    }
</style>
