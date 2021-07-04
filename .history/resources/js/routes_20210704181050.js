import PostsIndex from "./pages/frontend/posts/Index";
import PostDetail from "./pages/frontend/posts/Detail";


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
        path: "/post/edit",
        name: "EditPost",
        component: EditPost
    },
];
