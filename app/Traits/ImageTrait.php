<?php

namespace App\Traits;

use Exception;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Carbon;
use Nette\Utils\ImageException;

/**
 * Trait ImageTrait.
 */
trait ImageTrait
{

    /**
     * @param UploadedFile $file
     * @param string $path
     * @param array $options
     *
     * @return string
     * @throws ImageException
     *
     */
    public static function uploadImage($file)
    {
        try {
            if (!empty($file)) {
                $extension = $file->getClientOriginalExtension(); // getting image extension
                $date = Carbon::now()->format('Y-m-d');
                $fileName = uniqid($date, true) . '.' . $extension;
                $file->move('uploads', $fileName);
                return 'uploads\\' . $fileName;
            }
        } catch (Exception $e) {
            throw new ImageException($e->getMessage(), $e->getCode());
        }
    }

  
}
