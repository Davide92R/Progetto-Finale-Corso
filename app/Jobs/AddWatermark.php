<?php

namespace App\Jobs;

use App\Models\Image;
use Illuminate\Bus\Queueable;
use Spatie\Image\Manipulations;
use Illuminate\Queue\SerializesModels;
use Spatie\Image\Image as SpatieImage;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;


class AddWatermark implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $announce_image_id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($announce_image_id)
    {
        $this->announce_image_id = $announce_image_id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $i=Image::find($this->announce_image_id);
        if(!$i){
            return;
        }
        $srcPath = storage_path('app/public/' . $i->path);
        $image = file_get_contents($srcPath);

        // putenv('GOOGLE_APPLICATION_CREDENTIALS=' . base_path('google_credential.json'));

        // $imageAnnotator=new ImageAnnotatorClient();
        // $response=$imageAnnotator->faceDetection($image);
        // $faces = $response->getFaceAnnotations();

        // foreach ($faces as $face) {
        //     $vertices = $face->getBoundingPoly()->getVertices();

        //     $bounds = [];

        //     foreach ($vertices as $vertex){
        //         $bounds[] = [$vertex->getX(), $vertex->getY()];
        //     }

        //     $w =$bounds[2][0] - $bounds[0][0];
        //     $h =$bounds[2][1] - $bounds[0][1];

            $image = SpatieImage::load($srcPath);

            $image->watermark(base_path('resources/img/prestow.png'))
            ->watermarkPosition('bottom-right')
            ->WatermarkOpacity(50)
            ->watermarkPadding(10, 10, Manipulations::UNIT_PERCENT)
            ->watermarkFit(Manipulations::FIT_STRETCH);

            $image->save($srcPath);
        }

        // $imageAnnotator->close();
    }