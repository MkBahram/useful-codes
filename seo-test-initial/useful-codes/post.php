<?php

//i use laravel for this project , you can add this code in your controller


if ($request->hasFile('slider')) { //you can use $_POST['slider'] if you are using pure php

            $mimetypes = ['images/jpg','image/jpeg','image/png'];
            foreach($request->file('slider') as $slider)
            {
                if(in_array($slider->getClientMimeType(),$mimetypes)){
                    $imageName = rand(10000000,9999999999) . time() . '.' . $slider->getClientOriginalExtension();
                    $slider->move('Uploads/Sliders', $imageName);
                    $imageAddress = "Uploads/Sliders/" . $imageName;
                    DB::table('sliders')->insert([
                        'PostID' => $pin,
                        'SliderUrl' => $imageAddress
                    ]);
                    
                }
            }    
        }

?>
