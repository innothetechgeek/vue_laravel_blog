import PostsIndex from "./pages/frontend/posts/Index";
import PostDetail from "./pages/frontend/posts/Detail";

export const routes = [
    {
        path: "/posts",
        name: "PostsIndex",
        component: PostsIn
    },
    {
        path: "/post/detail",
        name: "PostDetail",
        component: PostDetail
    },
    

];
