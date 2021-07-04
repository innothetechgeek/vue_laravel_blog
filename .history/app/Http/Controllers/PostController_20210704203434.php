<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post_data = array_merge($request->all,)
        return Post::create([
            'title' => '8 ways to have fun',
            'content' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat obcaecati rerum aut. Ad veritatis blanditiis cum laudantium. Quis aliquam velit ex ipsum minima quos, tempore assumenda quidem, sapiente, inventore necessitatibus corrupti voluptate ratione maxime iusto odio fugiat ullam! Officia sequi nobis, deserunt nostrum, minima reiciendis et illum repellendus assumenda tenetur aperiam accusamus earum fuga itaque nulla modi consequatur veritatis sapiente, voluptates facere! Molestias harum a quod, aliquam itaque, quia repellat veniam laudantium inventore, sequi repellendus optio quisquam numquam deleniti dolore. Rem quo ratione, animi modi beatae adipisci, blanditiis, esse maiores error perferendis optio repellat nostrum nulla nemo? Expedita ullam quod fugit optio eaque dolorem voluptate nesciunt, perferendis voluptatum nemo ut consequatur odit excepturi sed deleniti, consequuntur officiis asperiores earum nam labore veritatis nisi? Aliquid blanditiis, aperiam quasi architecto eius accusamus culpa dolorem vel quaerat. Fugit saepe at molestiae eos officiis natus ratione ullam, cupiditate doloribus error cumque dolorum consequatur nesciunt non necessitatibus quisquam in similique corporis? Voluptate fugit id aperiam cumque possimus beatae eum perferendis obcaecati recusandae odio nostrum molestias deserunt dicta, illum hic dolorem libero culpa necessitatibus quam velit voluptas enim. Dignissimos modi nemo, porro neque sint nam repellendus natus ratione illum commodi molestiae mollitia praesentium incidunt, quam tempore beatae adipisci sunt quis quasi quas! Ad, quisquam impedit? Esse necessitatibus numquam provident quaerat fugiat. Animi, hic nulla. Quia enim ea nam tenetur saepe alias cum, repudiandae voluptatum praesentium, velit facere veritatis, libero porro quas numquam eaque amet nihil fugiat obcaecati incidunt perferendis. Dicta quidem ea aspernatur minima perferendis, possimus adipisci repudiandae unde id ratione doloribus fugit temporibus animi dolore similique! Consequatur sed vel vitae incidunt. Quo nemo quis, quasi, nostrum architecto tempore, porro pariatur ea eius enim expedita officia debitis. Exercitationem quisquam reiciendis pariatur, velit officia at aperiam error! Asperiores pariatur exercitationem nemo praesentium animi aliquid eveniet impedit quis saepe cupiditate, aut ut sapiente perferendis deleniti ab adipisci at nostrum nobis incidunt non architecto error! Quam repellendus exercitationem, consectetur aut neque ducimus placeat vero distinctio, facilis doloremque ad tempore rem saepe magnam porro sit at cum. Excepturi expedita voluptatem quae accusantium fugit eaque molestiae earum at suscipit illum unde enim quia rerum, quos sit maiores praesentium consectetur perferendis, facere ad. Aspernatur aliquid quos, eum porro vel necessitatibus officiis optio fugit, temporibus odio aut asperiores molestiae vitae culpa incidunt ratione laudantium eligendi placeat, recusandae perspiciatis quas error. Excepturi, molestiae placeat esse totam ad a pariatur sequi quibusdam maxime similique, repellendus tempore earum doloremque enim quae fugit aspernatur labore ipsam harum nisi modi impedit eos praesentium voluptas. Fugit iure quod molestias voluptatem obcaecati recusandae temporibus ratione ea quis, enim error, at culpa nisi rem officia nostrum blanditiis debitis et praesentium optio velit tenetur odit maxime. Tenetur odit, nisi esse dolores corporis sed laborum nemo voluptate tempora cum minus, facere debitis quam eum, eius perferendis exercitationem suscipit. Magni id, incidunt aspernatur eius voluptas nihil rerum temporibus alias, cum quibusdam magnam nam minima, est ex deleniti quae voluptatum possimus quaerat dolore. Neque libero assumenda labore aut ipsum soluta omnis numquam? Id ipsam rerum ullam? Incidunt consectetur illo tenetur, repellat, quis deserunt reprehenderit vero in quod nesciunt enim! Sit, voluptates impedit consequatur accusantium temporibus ducimus autem tempore fuga, ipsam sapiente nisi corporis maiores suscipit atque eius rerum architecto, esse nam quibusdam non possimus laudantium? Explicabo optio ducimus soluta consequatur dolore dolorem quas consequuntur repellat culpa sapiente possimus nisi, mollitia omnis aliquam alias sit pariatur? Similique aspernatur veritatis excepturi minus corrupti, perferendis necessitatibus amet, odio voluptates aut harum in quasi quae animi. Itaque rem, culpa iste assumenda blanditiis praesentium exercitationem earum corporis. Excepturi, animi a? Maxime adipisci perspiciatis hic voluptatum, pariatur voluptas rem rerum atque quo delectus accusantium sequi quisquam impedit quia incidunt deserunt totam eos aspernatur! Velit esse at ipsam ad molestiae, placeat quasi dicta laboriosam soluta quas culpa corporis. Rem aliquid sit, et ad placeat veniam laudantium asperiores fuga nihil a ipsa incidunt? Voluptate nulla, vitae laudantium deleniti facere aperiam libero hic! Consectetur ducimus voluptas tenetur sint ut praesentium repellendus ipsam vel nemo, corrupti optio explicabo iure beatae dolorum esse? Cupiditate dolor consectetur necessitatibus laborum. Rerum repudiandae odio asperiores labore amet nesciunt eligendi quos, fuga suscipit totam laudantium esse libero debitis voluptate distinctio maiores porro harum minima at quaerat quia iure, optio a consequatur! Non harum voluptate quis dolorem debitis ipsa molestiae accusamus et perspiciatis possimus voluptatibus asperiores quibusdam, exercitationem iure dignissimos, atque alias! Voluptatum facere quisquam quam nam tempora dicta, nihil sunt distinctio. Excepturi doloribus itaque labore adipisci similique non officiis a quaerat error dolor ducimus quae, magnam iure. Repudiandae esse quasi veniam accusamus optio corrupti minima, repellendus officia nisi aliquid molestiae animi nobis, fuga pariatur commodi reiciendis nihil, beatae quaerat fugiat minus. Adipisci aliquam dolore, recusandae est placeat nobis! Dolorem ex aspernatur aut mollitia corrupti, aperiam tenetur commodi, nostrum soluta nam maiores iusto deleniti eius in repellendus quis vitae nihil similique optio? Magnam dolorem, incidunt quas assumenda ducimus nemo voluptates unde libero id hic ipsam. Voluptatum ipsa, deleniti a eius adipisci eum perspiciatis officiis. Distinctio repellendus unde minima ex at amet veniam officiis facere similique. Autem laudantium laborum beatae molestiae doloremque? Maiores minima quibusdam ratione rem consequatur molestias? Possimus eveniet fuga sequi repellat officia nam quisquam omnis, at doloribus nemo consequatur facere praesentium nesciunt, ab sapiente voluptas est aliquam! Explicabo, pariatur deleniti alias fuga at aliquid voluptates sint modi optio mollitia minima fugiat vero culpa provident laborum. Facilis a fuga deleniti. Necessitatibus, quaerat qui dolorum expedita harum dicta cupiditate odit odio..',
             'user_id' =>1,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
