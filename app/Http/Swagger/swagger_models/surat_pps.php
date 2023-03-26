<?php

/**
  * @OA\Get(
  *      path="/v1/entities/surat-pps",
  *      operationId="browseIN.2-SuratPerintahPengamananPembangunanStrategis",
  *      tags={"surat-pps"},
  *      summary="Browse IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      description="Returns list of IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
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
  *      path="/v1/entities/surat-pps/read?slug=surat-pps&id={id}",
  *      operationId="readIN.2-SuratPerintahPengamananPembangunanStrategis",
  *      tags={"surat-pps"},
  *      summary="Get IN.2 - Surat Perintah Pengamanan Pembangunan Strategis based on id",
  *      description="Returns IN.2 - Surat Perintah Pengamanan Pembangunan Strategis based on id",
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
  *      path="/v1/entities/surat-pps/add",
  *      operationId="addIN.2-SuratPerintahPengamananPembangunanStrategis",
  *      tags={"surat-pps"},
  *      summary="Insert new IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      description="Insert new IN.2 - Surat Perintah Pengamanan Pembangunan Strategis into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor":"Abc", "menimbang":"Abc", "jaksaBertugas":"Abc", "tglSurat":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/surat-pps/edit",
  *      operationId="editIN.2-SuratPerintahPengamananPembangunanStrategis",
  *      tags={"surat-pps"},
  *      summary="Edit an existing IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      description="Edit an existing IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor":"Abc", "menimbang":"Abc", "jaksaBertugas":"Abc", "tglSurat":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/surat-pps/delete",
  *      operationId="deleteIN.2-SuratPerintahPengamananPembangunanStrategis",
  *      tags={"surat-pps"},
  *      summary="Delete one record of IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      description="Delete one record of IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-pps",
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
  *      path="/v1/entities/surat-pps/delete-multiple",
  *      operationId="deleteMultipleIN.2-SuratPerintahPengamananPembangunanStrategis",
  *      tags={"surat-pps"},
  *      summary="Delete multiple record of IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      description="Delete multiple record of IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-pps",
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
  *      path="/v1/entities/surat-pps/sort",
  *      operationId="sortIN.2-SuratPerintahPengamananPembangunanStrategis",
  *      tags={"surat-pps"},
  *      summary="Sort existing IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      description="Sort existing IN.2 - Surat Perintah Pengamanan Pembangunan Strategis",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-pps",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nomor":"Abc", "menimbang":"Abc", "jaksaBertugas":"Abc", "tglSurat":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nomor":"Abc", "menimbang":"Abc", "jaksaBertugas":"Abc", "tglSurat":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nomor"), 
  *                         @OA\Property(type="string", property="menimbang"), 
  *                         @OA\Property(type="string", property="jaksaBertugas"), 
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