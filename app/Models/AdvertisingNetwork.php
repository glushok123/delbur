<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Support\Facades\Storage;
use Str;

class AdvertisingNetwork extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'advertising_networks';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'logo',
    ];

    public function setLogoAttribute($value)
    {
        $attribute_name = "logo";
        // destination path relative to the disk above
        $destination_path = "/public/uploads";
       
        // if the image was erased
        if ($value==null) {
            // delete the image from disk
            Storage::delete($this->{$attribute_name});
    
            // set null in the database column
            $this->attributes[$attribute_name] = null;
        }
        else {

            // 0. Make the image
            $image = Image::make($value)->encode('jpg', 90);
    
            // 1. Generate a filename.
            $filename = md5($value.time()).'.jpg';
    
            // 2. Store the image on disk.
            Storage::put($destination_path.'/'.$filename, $image->stream());
    
            // 3. Delete the previous image, if there was one.
            //Storage::delete(Str::replaceFirst('storage/','public/', $this->{$attribute_name}));
    
            // 4. Save the public path to the database
            // but first, remove "public/" from the path, since we're pointing to it
            // from the root folder; that way, what gets saved in the db
            // is the public URL (everything that comes after the domain name)
            $public_destination_path = Str::replaceFirst('public/', 'storage/', $destination_path);
            $this->attributes[$attribute_name] = $filename;
        }
    }
}
