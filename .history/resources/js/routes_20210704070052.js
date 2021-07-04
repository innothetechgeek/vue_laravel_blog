import PostsIndex from "./pages/frontend/posts/Index";
import PostDetail from "./pages/frontend/posts/Detail";


export const router = [
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
];
