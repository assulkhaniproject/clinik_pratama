<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;

trait UploadFile {

    public function uploadFileDisk($request, $disk, $fieldname, $destination, $oldFileName = null)
    {
        if($request->file($fieldname)){
            $this->removeFileDisk($disk, $destination, $oldFileName);

            $fileName = Storage::disk($disk)->put(
                $destination, $request->file($fieldname)
            );

            return basename($fileName);
        }

        return null;
    }
    
    public function removeFileDisk($disk, $destination, $oldFileName)
    {
        if($oldFileName){ // exists file
            Storage::disk($disk)->delete($destination . $oldFileName);
        }
    }
}
