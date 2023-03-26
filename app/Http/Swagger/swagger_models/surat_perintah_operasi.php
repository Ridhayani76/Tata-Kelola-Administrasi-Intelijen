<?php

/**
  * @OA\Get(
  *      path="/v1/entities/surat-perintah-operasi",
  *      operationId="browseIN.3-SuratPerintahOperasiIntelijen",
  *      tags={"surat-perintah-operasi"},
  *      summary="Browse IN.3 - Surat Perintah Operasi Intelijen",
  *      description="Returns list of IN.3 - Surat Perintah Operasi Intelijen",
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
  *      path="/v1/entities/surat-perintah-operasi/read?slug=surat-perintah-operasi&id={id}",
  *      operationId="readIN.3-SuratPerintahOperasiIntelijen",
  *      tags={"surat-perintah-operasi"},
  *      summary="Get IN.3 - Surat Perintah Operasi Intelijen based on id",
  *      description="Returns IN.3 - Surat Perintah Operasi Intelijen based on id",
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
  *      path="/v1/entities/surat-perintah-operasi/add",
  *      operationId="addIN.3-SuratPerintahOperasiIntelijen",
  *      tags={"surat-perintah-operasi"},
  *      summary="Insert new IN.3 - Surat Perintah Operasi Intelijen",
  *      description="Insert new IN.3 - Surat Perintah Operasi Intelijen into database",
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
  *      path="/v1/entities/surat-perintah-operasi/edit",
  *      operationId="editIN.3-SuratPerintahOperasiIntelijen",
  *      tags={"surat-perintah-operasi"},
  *      summary="Edit an existing IN.3 - Surat Perintah Operasi Intelijen",
  *      description="Edit an existing IN.3 - Surat Perintah Operasi Intelijen",
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
  *      path="/v1/entities/surat-perintah-operasi/delete",
  *      operationId="deleteIN.3-SuratPerintahOperasiIntelijen",
  *      tags={"surat-perintah-operasi"},
  *      summary="Delete one record of IN.3 - Surat Perintah Operasi Intelijen",
  *      description="Delete one record of IN.3 - Surat Perintah Operasi Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-perintah-operasi",
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
  *      path="/v1/entities/surat-perintah-operasi/delete-multiple",
  *      operationId="deleteMultipleIN.3-SuratPerintahOperasiIntelijen",
  *      tags={"surat-perintah-operasi"},
  *      summary="Delete multiple record of IN.3 - Surat Perintah Operasi Intelijen",
  *      description="Delete multiple record of IN.3 - Surat Perintah Operasi Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-perintah-operasi",
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
  *      path="/v1/entities/surat-perintah-operasi/sort",
  *      operationId="sortIN.3-SuratPerintahOperasiIntelijen",
  *      tags={"surat-perintah-operasi"},
  *      summary="Sort existing IN.3 - Surat Perintah Operasi Intelijen",
  *      description="Sort existing IN.3 - Surat Perintah Operasi Intelijen",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-perintah-operasi",
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