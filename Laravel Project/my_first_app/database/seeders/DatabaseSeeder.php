<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Post::truncate();
        // User::truncate();
        // Category::truncate();

       
        $user = User::factory()->create(['name' => 'Stefan Markoski']);

        Post::factory(5)->create([ 'user_id' => $user->id ]);

      }
    }
















/*
        $personal = Category::create([
        'name' => 'Personal',
        'slug' => 'personal',
        ]);
        $work = Category::create([
        'name' => 'Work',
        'slug' => 'work',
        ]);
        $hobby = Category::create([
        'name' => 'Hobby',
        'slug' => 'hobby',
        ]);

        Post::create([

            'user_id' => $user->id,
            'category_id'=> $personal->id,
            'title' => 'Personal Post',
            'slug' => 'my-first-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisi tortor, fringilla vel dignissim ut, ornare at turpis. Donec ornare arcu id cursus faucibus. Duis laoreet vitae urna id ornare. Quisque gravida placerat dignissim. Donec aliquet congue ipsum nec scelerisque. Suspendisse finibus tincidunt diam, eget fermentum eros gravida a. Suspendisse potenti. Nam ac dolor molestie, pretium velit sed, mollis ex.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis lacus feugiat, elementum diam sit amet, pharetra lacus. Nulla malesuada efficitur dui, eget tincidunt lorem fringilla a. Cras molestie neque eu eleifend viverra. Sed sit amet dui rutrum, convallis nunc ut, accumsan urna. Duis dignissim erat at tellus vehicula, nec venenatis ante scelerisque. Suspendisse ut tincidunt odio. Mauris dui ligula, ultricies at accumsan ut, interdum placerat libero. Fusce at leo neque. In iaculis purus sapien, id tincidunt nunc sodales et. Vivamus mi arcu, ultrices sed augue non, rutrum condimentum velit. Quisque condimentum nulla aliquet eleifend sagittis.
            Integer sagittis malesuada hendrerit. Nam vitae lectus nec diam tincidunt bibendum. Sed eu felis sit amet diam posuere tempus vitae ac mauris. Maecenas arcu dui, consequat feugiat quam vel, maximus sagittis lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas faucibus eros at libero rhoncus, eu ullamcorper nibh lacinia. Quisque vel commodo felis. Donec et dignissim mi, eget lacinia velit. Etiam vehicula dui elementum magna auctor, quis cursus diam tincidunt. Morbi luctus accumsan facilisis. Nullam fermentum sit amet massa eget condimentum. Maecenas id ipsum nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et diam ac metus maximus ultricies et a nulla. Proin eget massa lectus. Integer volutpat ipsum nec pulvinar pulvinar.
            Maecenas a gravida sapien, eget dictum libero. Maecenas pretium elit sodales ex dapibus tincidunt. Maecenas orci nisi, vulputate vitae ullamcorper eget, iaculis vel dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lectus, scelerisque quis ex nec, faucibus porta mauris. Sed pellentesque venenatis arcu ut suscipit. Morbi consequat erat sit amet mi maximus, sit amet vulputate turpis varius. Nullam suscipit id orci in aliquam. Donec cursus fringilla nisl, ut molestie justo commodo non. Vivamus auctor purus vitae dui fringilla euismod. Phasellus efficitur, est sed finibus accumsan, arcu leo lacinia risus, ut consectetur orci lorem in mi. Proin nec nisl vel ex interdum finibus at scelerisque lacus.
            Curabitur fringilla pharetra urna quis feugiat. Pellentesque lacinia commodo varius. Fusce tempor, lectus ut vestibulum malesuada, magna quam auctor augue, a malesuada ex est a neque. Nam vel dictum magna. Fusce interdum ante quis odio vulputate, vitae sagittis justo dictum. Pellentesque tellus risus, faucibus eget nunc eu, efficitur efficitur felis. Cras in scelerisque dolor. Sed hendrerit tempus purus, quis ullamcorper est euismod sit amet.
            Etiam sed diam ante. Maecenas porta, velit ut eleifend accumsan, sem ante vestibulum ligula, sollicitudin maximus mauris mauris ac metus. Integer vitae interdum urna, et euismod dolor. Ut suscipit facilisis sapien et auctor. Donec tempus eros ac lacinia tincidunt. Mauris accumsan et risus at fringilla. Aliquam vestibulum luctus lacus, et pulvinar lectus pellentesque a. Suspendisse varius eros in dolor imperdiet, nec accumsan purus luctus. Proin lorem ipsum, sodales ut bibendum vitae, vehicula non felis. Fusce scelerisque, est sed mollis consequat, mi ante ullamcorper libero, eu pellentesque justo est tristique dui. Cras luctus ipsum erat. Morbi quis laoreet ipsum. Praesent gravida, diam vel sodales blandit, turpis purus placerat quam, ut mattis libero felis sit amet ex. Suspendisse egestas interdum lobortis. Mauris in ex maximus, dapibus est quis, semper nibh. Aliquam bibendum nibh eget massa aliquet, at dignissim tortor semper.</p>'
            
        ]);

        Post::create([

            'user_id' => $user->id,
            'category_id'=> $work->id,
            'title' => 'Work Post',
            'slug' => 'my-second-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisi tortor, fringilla vel dignissim ut, ornare at turpis. Donec ornare arcu id cursus faucibus. Duis laoreet vitae urna id ornare. Quisque gravida placerat dignissim. Donec aliquet congue ipsum nec scelerisque. Suspendisse finibus tincidunt diam, eget fermentum eros gravida a. Suspendisse potenti. Nam ac dolor molestie, pretium velit sed, mollis ex.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis lacus feugiat, elementum diam sit amet, pharetra lacus. Nulla malesuada efficitur dui, eget tincidunt lorem fringilla a. Cras molestie neque eu eleifend viverra. Sed sit amet dui rutrum, convallis nunc ut, accumsan urna. Duis dignissim erat at tellus vehicula, nec venenatis ante scelerisque. Suspendisse ut tincidunt odio. Mauris dui ligula, ultricies at accumsan ut, interdum placerat libero. Fusce at leo neque. In iaculis purus sapien, id tincidunt nunc sodales et. Vivamus mi arcu, ultrices sed augue non, rutrum condimentum velit. Quisque condimentum nulla aliquet eleifend sagittis.
            Integer sagittis malesuada hendrerit. Nam vitae lectus nec diam tincidunt bibendum. Sed eu felis sit amet diam posuere tempus vitae ac mauris. Maecenas arcu dui, consequat feugiat quam vel, maximus sagittis lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas faucibus eros at libero rhoncus, eu ullamcorper nibh lacinia. Quisque vel commodo felis. Donec et dignissim mi, eget lacinia velit. Etiam vehicula dui elementum magna auctor, quis cursus diam tincidunt. Morbi luctus accumsan facilisis. Nullam fermentum sit amet massa eget condimentum. Maecenas id ipsum nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et diam ac metus maximus ultricies et a nulla. Proin eget massa lectus. Integer volutpat ipsum nec pulvinar pulvinar.
            Maecenas a gravida sapien, eget dictum libero. Maecenas pretium elit sodales ex dapibus tincidunt. Maecenas orci nisi, vulputate vitae ullamcorper eget, iaculis vel dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lectus, scelerisque quis ex nec, faucibus porta mauris. Sed pellentesque venenatis arcu ut suscipit. Morbi consequat erat sit amet mi maximus, sit amet vulputate turpis varius. Nullam suscipit id orci in aliquam. Donec cursus fringilla nisl, ut molestie justo commodo non. Vivamus auctor purus vitae dui fringilla euismod. Phasellus efficitur, est sed finibus accumsan, arcu leo lacinia risus, ut consectetur orci lorem in mi. Proin nec nisl vel ex interdum finibus at scelerisque lacus.
            Curabitur fringilla pharetra urna quis feugiat. Pellentesque lacinia commodo varius. Fusce tempor, lectus ut vestibulum malesuada, magna quam auctor augue, a malesuada ex est a neque. Nam vel dictum magna. Fusce interdum ante quis odio vulputate, vitae sagittis justo dictum. Pellentesque tellus risus, faucibus eget nunc eu, efficitur efficitur felis. Cras in scelerisque dolor. Sed hendrerit tempus purus, quis ullamcorper est euismod sit amet.
            Etiam sed diam ante. Maecenas porta, velit ut eleifend accumsan, sem ante vestibulum ligula, sollicitudin maximus mauris mauris ac metus. Integer vitae interdum urna, et euismod dolor. Ut suscipit facilisis sapien et auctor. Donec tempus eros ac lacinia tincidunt. Mauris accumsan et risus at fringilla. Aliquam vestibulum luctus lacus, et pulvinar lectus pellentesque a. Suspendisse varius eros in dolor imperdiet, nec accumsan purus luctus. Proin lorem ipsum, sodales ut bibendum vitae, vehicula non felis. Fusce scelerisque, est sed mollis consequat, mi ante ullamcorper libero, eu pellentesque justo est tristique dui. Cras luctus ipsum erat. Morbi quis laoreet ipsum. Praesent gravida, diam vel sodales blandit, turpis purus placerat quam, ut mattis libero felis sit amet ex. Suspendisse egestas interdum lobortis. Mauris in ex maximus, dapibus est quis, semper nibh. Aliquam bibendum nibh eget massa aliquet, at dignissim tortor semper.</p>'
            
        ]);

        Post::create([

            'user_id' => $user->id,
            'category_id'=> $hobby->id,
            'title' => 'Hobbies Post',
            'slug' => 'my-third-post',
            'excerpt' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque nisi tortor, fringilla vel dignissim ut, ornare at turpis. Donec ornare arcu id cursus faucibus. Duis laoreet vitae urna id ornare. Quisque gravida placerat dignissim. Donec aliquet congue ipsum nec scelerisque. Suspendisse finibus tincidunt diam, eget fermentum eros gravida a. Suspendisse potenti. Nam ac dolor molestie, pretium velit sed, mollis ex.</p>',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque quis lacus feugiat, elementum diam sit amet, pharetra lacus. Nulla malesuada efficitur dui, eget tincidunt lorem fringilla a. Cras molestie neque eu eleifend viverra. Sed sit amet dui rutrum, convallis nunc ut, accumsan urna. Duis dignissim erat at tellus vehicula, nec venenatis ante scelerisque. Suspendisse ut tincidunt odio. Mauris dui ligula, ultricies at accumsan ut, interdum placerat libero. Fusce at leo neque. In iaculis purus sapien, id tincidunt nunc sodales et. Vivamus mi arcu, ultrices sed augue non, rutrum condimentum velit. Quisque condimentum nulla aliquet eleifend sagittis.
            Integer sagittis malesuada hendrerit. Nam vitae lectus nec diam tincidunt bibendum. Sed eu felis sit amet diam posuere tempus vitae ac mauris. Maecenas arcu dui, consequat feugiat quam vel, maximus sagittis lorem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Maecenas faucibus eros at libero rhoncus, eu ullamcorper nibh lacinia. Quisque vel commodo felis. Donec et dignissim mi, eget lacinia velit. Etiam vehicula dui elementum magna auctor, quis cursus diam tincidunt. Morbi luctus accumsan facilisis. Nullam fermentum sit amet massa eget condimentum. Maecenas id ipsum nisl. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus et diam ac metus maximus ultricies et a nulla. Proin eget massa lectus. Integer volutpat ipsum nec pulvinar pulvinar.
            Maecenas a gravida sapien, eget dictum libero. Maecenas pretium elit sodales ex dapibus tincidunt. Maecenas orci nisi, vulputate vitae ullamcorper eget, iaculis vel dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras tellus lectus, scelerisque quis ex nec, faucibus porta mauris. Sed pellentesque venenatis arcu ut suscipit. Morbi consequat erat sit amet mi maximus, sit amet vulputate turpis varius. Nullam suscipit id orci in aliquam. Donec cursus fringilla nisl, ut molestie justo commodo non. Vivamus auctor purus vitae dui fringilla euismod. Phasellus efficitur, est sed finibus accumsan, arcu leo lacinia risus, ut consectetur orci lorem in mi. Proin nec nisl vel ex interdum finibus at scelerisque lacus.
            Curabitur fringilla pharetra urna quis feugiat. Pellentesque lacinia commodo varius. Fusce tempor, lectus ut vestibulum malesuada, magna quam auctor augue, a malesuada ex est a neque. Nam vel dictum magna. Fusce interdum ante quis odio vulputate, vitae sagittis justo dictum. Pellentesque tellus risus, faucibus eget nunc eu, efficitur efficitur felis. Cras in scelerisque dolor. Sed hendrerit tempus purus, quis ullamcorper est euismod sit amet.
            Etiam sed diam ante. Maecenas porta, velit ut eleifend accumsan, sem ante vestibulum ligula, sollicitudin maximus mauris mauris ac metus. Integer vitae interdum urna, et euismod dolor. Ut suscipit facilisis sapien et auctor. Donec tempus eros ac lacinia tincidunt. Mauris accumsan et risus at fringilla. Aliquam vestibulum luctus lacus, et pulvinar lectus pellentesque a. Suspendisse varius eros in dolor imperdiet, nec accumsan purus luctus. Proin lorem ipsum, sodales ut bibendum vitae, vehicula non felis. Fusce scelerisque, est sed mollis consequat, mi ante ullamcorper libero, eu pellentesque justo est tristique dui. Cras luctus ipsum erat. Morbi quis laoreet ipsum. Praesent gravida, diam vel sodales blandit, turpis purus placerat quam, ut mattis libero felis sit amet ex. Suspendisse egestas interdum lobortis. Mauris in ex maximus, dapibus est quis, semper nibh. Aliquam bibendum nibh eget massa aliquet, at dignissim tortor semper.</p>'
            
        ]);
    }
        */


