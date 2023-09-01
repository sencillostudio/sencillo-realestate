<?php

namespace App;

class Property {
    // db 
    protected static $db;
    protected static $dbColumns = ['id', 'name', 'description', 'address', 'type', 'neighborhood', 'city', 'county', 'state', 'rooms', 'bedrooms', 'bathrooms', 'services', 'square_feet', 'width', 'length', 'value', 'transaction', 'img1', 'img2', 'img3', 'img4', 'img5', 'img6', 'img7', 'img8', 'img9', 'img10', 'img11', 'img12', 'img13', 'img14', 'img15', 'button_1_text', 'button_2_text', 'button_3_text', 'button_4_text', 'button_5_text', 'button_6_text', 'button_7_text', 'doc1', 'doc2', 'doc3', 'doc4', 'doc5', 'doc6', 'doc7', 'video_iframe', 'map_iframe', 'private_notes', 'status', 'featured', 'code'];

    // Error messages array
    protected static $errors = [];

    public $id;
    public $name;
    public $description;
    public $address;
    public $type;
    public $neighborhood;
    public $city;
    public $county;
	public $state;
    public $rooms;
    public $bedrooms;
    public $bathrooms;
    public $services;
    public $square_feet;
    public $width;
    public $length;
    public $value;
    public $transaction;
    public $img1;
    public $img2;
    public $img3;
    public $img4;
    public $img5;
    public $img6;
    public $img7;
    public $img8;
    public $img9;
    public $img10;
    public $img11;
    public $img12;
    public $img13;
    public $img14;
    public $img15;
    public $button_1_text;
    public $button_2_text;
    public $button_3_text;
    public $button_4_text;
    public $button_5_text;
    public $button_6_text;
    public $button_7_text;
    public $doc1;
    public $doc2;
    public $doc3;
    public $doc4;
    public $doc5;
    public $doc6;
    public $doc7;
    public $video_iframe;
    public $map_iframe;
    public $private_notes;
    public $status;
    public $featured;
    public $code;
    
    // Define Db
    public static function setDB($database) {
        self::$db = $database;
    }

    public function __construct($args = [])
    {
        $this->id = $args['id'] ?? '';
        $this->name = $args['name'] ?? '';
        $this->description = $args['description'] ?? '';
        $this->address = $args['address'] ?? '';
        $this->type = $args['type'] ?? '';
        $this->neighborhood = $args['neighborhood'] ?? '';
        $this->city = $args['city'] ?? '';
        $this->county = $args['county'] ?? '';
        $this->state = $args['state'] ?? '';
        $this->rooms = $args['rooms'] ?? '';
        $this->bedrooms = $args['bedrooms'] ?? '';
        $this->bathrooms = $args['bathrooms'] ?? '';
        $this->services = $args['services'] ?? '';
        $this->square_feet = $args['square_feet'] ?? '';
        $this->width = $args['width'] ?? '';
        $this->length = $args['length'] ?? '';
        $this->value = $args['value'] ?? '';
        $this->transaction = $args['transaction'] ?? '';
        $this->img1 = $args['img1'] ?? '';
        $this->img2 = $args['img2'] ?? '';
        $this->img3 = $args['img3'] ?? '';
        $this->img4 = $args['img4'] ?? '';
        $this->img5 = $args['img5'] ?? '';
        $this->img6 = $args['img6'] ?? '';
        $this->img7 = $args['img7'] ?? '';
        $this->img8 = $args['img8'] ?? '';
        $this->img9 = $args['img9'] ?? '';
        $this->img10 = $args['img10'] ?? '';
        $this->img11 = $args['img11'] ?? '';
        $this->img12 = $args['img12'] ?? '';
        $this->img13 = $args['img13'] ?? '';
        $this->img14 = $args['img14'] ?? '';
        $this->img15 = $args['img15'] ?? '';
        $this->button_1_text = $args['button_1_text'] ?? '';
        $this->button_2_text = $args['button_2_text'] ?? '';
        $this->button_3_text = $args['button_3_text'] ?? '';
        $this->button_4_text = $args['button_4_text'] ?? '';
        $this->button_5_text = $args['button_5_text'] ?? '';
        $this->button_6_text = $args['button_6_text'] ?? '';
        $this->button_7_text = $args['button_7_text'] ?? '';
        $this->doc1 = $args['doc1'] ?? '';
        $this->doc2 = $args['doc2'] ?? '';
        $this->doc3 = $args['doc3'] ?? '';
        $this->doc4 = $args['doc4'] ?? '';
        $this->doc5 = $args['doc5'] ?? '';
        $this->doc6 = $args['doc6'] ?? '';
        $this->doc7 = $args['doc7'] ?? '';
        $this->video_iframe = $args['video_iframe'] ?? '';
        $this->map_iframe = $args['map_iframe'] ?? '';
        $this->private_notes = $args['private_notes'] ?? '';
        $this->status = $args['status'] ?? '';
        $this->featured = $args['featured'] ?? '';
        $this->code = $args['code'] ?? '';
        
    }
    public function save() {
        // sanitize data
        $attributes = $this->sanitizeAttributes();

        // Insert in database
        $query = "INSERT INTO sre_properties(";
        $query .= join(', ', array_keys($attributes));
        $query .= ") VALUES ('";
        $query .= join("', '", array_values($attributes));
        $query .= " ') ";

        $result = self::$db->query($query);
        if ($result) {
            $lastRowId = self::$db->insert_id;
            $this->setCode($lastRowId);
            $this->id = $lastRowId;
            
        }
        return $result;
        
    }

    public function sanitizeAttributes() {
        $attributes = $this->attributes();
        $sanitized = [];

        foreach ($attributes as $key => $value) {
            $sanitized[$key] = self::$db->escape_string($value);
        }
        return $sanitized;
    }
     
    // identify and bind db attributes
    public function attributes() {
        $attributes = [];
        foreach(self::$dbColumns as $column) {
            if($column === 'id' || $column === 'code') continue;
            $attributes[$column] = $this->$column;
        }
        return $attributes;

    }

    // Validation
    public static function getErrors() {
        return self::$errors;
    }

    public function validate() {
        if (!$this->name) {
            self::$errors[] = "<p><strong>Name</strong> missing</p>";
        }
        if (strlen($this->description) < 40) {
            self::$errors[] = "<p>The <strong>Description</strong> must be at least 40 characters long.</p>";
        }
        return self::$errors;

    }

    public function setCode($lastRowId) {
        $prefix = 'prop';
        $code = $prefix . $lastRowId;
                   
        $updateCodeQuery = "UPDATE sre_properties SET code = ? WHERE id = ?";
        $stmt = self::$db->prepare($updateCodeQuery);
        mysqli_stmt_bind_param($stmt, "si", $code, $lastRowId);
        $setCodeResult = mysqli_stmt_execute($stmt);
        if ($setCodeResult) {
            $this->code = $code;
        }

        // return $setCodeResult;
    }

    public function uploadImages($files, $galleryImagesNumber) {

        // Create img directory
        $filesDir = BASE_DIR . "/files";
        $imgDir = $filesDir . "/img";
        if (!is_dir($filesDir)) {
            mkdir($filesDir);
        }
        if (!is_dir($imgDir)) {
            mkdir($imgDir);
        }


        // Upload images, convert to WebP, assign name and save URL in database
        for ($i = 1; $i <= $galleryImagesNumber; $i++) { // don't use 0-index
            $imgName = 'img' . $i;
            $image = $files[$imgName];

            if ($image['name']) {
                $imageOriginalName = $image['name'];
                $imageFileExtension = strtolower(pathinfo($imageOriginalName, PATHINFO_EXTENSION));
                
                // Verify image format
                $allowedFormats=['jpg', 'jpeg', 'png', 'gif'];
                if (in_array($imageFileExtension, $allowedFormats)) {
                    $imageFileName = $this->code . $imgName;
                    $originalImageRoute = $image['tmp_name'];

                    // handle different formats and create original image
                    $tempImageResource = createImageFromFormat($imageFileExtension, $originalImageRoute);
                    
                    // Verify original file size
                    $originalFileSize = filesize($originalImageRoute); // Tamaño en bytes
                    $originalFileSizeMB = $originalFileSize / (1024 * 1024); // conversión a MB

                    // Quality of compression
                    $compressionQuality = ($originalFileSizeMB < 1.5) ? 80 : 50;

                    if ($tempImageResource) {
                        // Convert to webp
                        $webpImageRoute = $imgDir . '/' . $imageFileName . '.webp';
                        imagewebp($tempImageResource, $webpImageRoute, $compressionQuality);
                        imagedestroy($tempImageResource);

                        // Save image url in database
                        $finalUrl = BASE_URL . '/files/img/' . $imageFileName . '.webp';
                        $updateUrlQuery = "UPDATE sre_properties SET $imgName = '$finalUrl' WHERE id = '$this->id'";
                        $result = self::$db->query($updateUrlQuery);
                        return $result;

                    } else {
                        self::$errors[] = "<p>error in image creation</p>";
                        return false;
                    }



                } else {
                    // Image format not allowed
                    self::$errors[] = "<p>Image <strong>format</strong> not allowed</p>";
                    return false;
                }

            }
        }

    }
    
}
