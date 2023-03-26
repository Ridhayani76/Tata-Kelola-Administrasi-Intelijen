<?php

/**
  * @OA\Get(
  *      path="/v1/entities/catatan-wawancara",
  *      operationId="browseIN.11-CatatanWawancara",
  *      tags={"catatan-wawancara"},
  *      summary="Browse IN.11 - Catatan Wawancara",
  *      description="Returns list of IN.11 - Catatan Wawancara",
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Get(
  *      path="/v1/entities/catatan-wawancara/read?slug=catatan-wawancara&id={id}",
  *      operationId="readIN.11-CatatanWawancara",
  *      tags={"catatan-wawancara"},
  *      summary="Get IN.11 - Catatan Wawancara based on id",
  *      description="Returns IN.11 - Catatan Wawancara based on id",
  *      @OA\Parameter(
  *          name="id",
  *          required=true,
  *          in="path",
  *          @OA\Schema(
  *              type="integer"
  *          )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Post(
  *      path="/v1/entities/catatan-wawancara/add",
  *      operationId="addIN.11-CatatanWawancara",
  *      tags={"catatan-wawancara"},
  *      summary="Insert new IN.11 - Catatan Wawancara",
  *      description="Insert new IN.11 - Catatan Wawancara into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"dasarSurat":"", "tempat":"Abc", "waktu":"Abc", "narasumber":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "berkas":"Abc"},
  *                 ),
  *             )
  *         )
  *      ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/catatan-wawancara/edit",
  *      operationId="editIN.11-CatatanWawancara",
  *      tags={"catatan-wawancara"},
  *      summary="Edit an existing IN.11 - Catatan Wawancara",
  *      description="Edit an existing IN.11 - Catatan Wawancara",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"dasarSurat":"", "tempat":"Abc", "waktu":"Abc", "narasumber":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "berkas":"Abc"},
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/catatan-wawancara/delete",
  *      operationId="deleteIN.11-CatatanWawancara",
  *      tags={"catatan-wawancara"},
  *      summary="Delete one record of IN.11 - Catatan Wawancara",
  *      description="Delete one record of IN.11 - Catatan Wawancara",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="catatan-wawancara",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="id"),
  *                         @OA\Property(type="integer", property="value", example="123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Delete(
  *      path="/v1/entities/catatan-wawancara/delete-multiple",
  *      operationId="deleteMultipleIN.11-CatatanWawancara",
  *      tags={"catatan-wawancara"},
  *      summary="Delete multiple record of IN.11 - Catatan Wawancara",
  *      description="Delete multiple record of IN.11 - Catatan Wawancara",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="catatan-wawancara",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="string", property="field", default="ids"),
  *                         @OA\Property(type="{}", property="value", example="123,123"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */

/**
  * @OA\Put(
  *      path="/v1/entities/catatan-wawancara/sort",
  *      operationId="sortIN.11-CatatanWawancara",
  *      tags={"catatan-wawancara"},
  *      summary="Sort existing IN.11 - Catatan Wawancara",
  *      description="Sort existing IN.11 - Catatan Wawancara",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="catatan-wawancara",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "dasarSurat":"", "tempat":"Abc", "waktu":"Abc", "narasumber":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "dasarSurat":"", "tempat":"Abc", "waktu":"Abc", "narasumber":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="dasarSurat"), 
  *                         @OA\Property(type="string", property="tempat"), 
  *                         @OA\Property(type="string", property="waktu"), 
  *                         @OA\Property(type="string", property="narasumber"), 
  *                         @OA\Property(type="string", property="pelaksana"), 
  *                         @OA\Property(type="string", property="tglSurat"), 
  *                         @OA\Property(type="string", property="berkas"), 
  *                         @OA\Property(type="string", property="createdAt"), 
  *                         @OA\Property(type="string", property="updatedAt"), 
  *                         @OA\Property(type="string", property="deletedAt"),
  *                     ),
  *                ),
  *             )
  *         )
  *     ),
  *      @OA\Response(response=200, description="Successful operation"),
  *      @OA\Response(response=400, description="Bad request"),
  *      @OA\Response(response=401, description="Unauthorized"),
  *      @OA\Response(response=402, description="Payment Required"),
  *      security={
  *          {"bearerAuth": {}}
  *      }
  * )
  *
  */