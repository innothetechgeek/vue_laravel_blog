import PostsIndex from "./pages/frontend/posts/Index";
import PostDetail from "./pages/frontend/posts/Detail";
import UserDashboard from "./pages/backend/posts/Dashboard";
import AddPost from "./pages/backend/posts/Add";


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
        path:
    },
    {
        path: "/post/add",
        name: "AddPost",
        component: AddPost
    },
];
