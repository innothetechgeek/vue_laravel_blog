import PostsIndex from "./pages/frontend/posts/Index";
import AddPost from "./pages/backend/posts/";


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
        path: "/post/add",
        name: "AddPost",
        component: AddPost
    },
];
