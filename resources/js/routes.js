import PostsIndex from "./pages/frontend/posts/Index";
import PostDetail from "./pages/frontend/posts/Detail";
import Register from "./pages/frontend/Register";
import Login from "./pages/frontend/Login";


import UserDashboard from "./pages/dashboard/posts/Dashboard";
import AddPost from "./pages/dashboard/posts/Add";
import EditPost from "./pages/dashboard/posts/Edit";

export const routes = [
    {
        path: '/',
        redirect: '/posts',
        name: 'Home',
        component: {
            template: '<router-view/>',
        },
    },
    {
        path: "/posts",
        name: "PostsIndex",
        component: PostsIndex
    },
    {
        path: "/post/detail",
        name: "PostDetail",
        component: PostDetail
    },   
    {
        path: "/dashboard",
        name: "UserDashboard",
        component: UserDashboard
    },
    {
        path: "/dashboard/post/add",
        name: "AddPost",
        component: AddPost
    },
    {
        path: "dashboard/post/edit",
        name: "EditPost",
        component: EditPost
    },
    {
        path: "/register",
        name:"register",
        component : Register
    },
    {
        path: "/login",
        name:"login",
        component : Login
    }
];
