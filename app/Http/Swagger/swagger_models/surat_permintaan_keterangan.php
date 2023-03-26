<?php

/**
  * @OA\Get(
  *      path="/v1/entities/surat-permintaan-keterangan",
  *      operationId="browseIN.9-SuratPermintaanKeterangan",
  *      tags={"surat-permintaan-keterangan"},
  *      summary="Browse IN.9 - Surat Permintaan Keterangan",
  *      description="Returns list of IN.9 - Surat Permintaan Keterangan",
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
  *      path="/v1/entities/surat-permintaan-keterangan/read?slug=surat-permintaan-keterangan&id={id}",
  *      operationId="readIN.9-SuratPermintaanKeterangan",
  *      tags={"surat-permintaan-keterangan"},
  *      summary="Get IN.9 - Surat Permintaan Keterangan based on id",
  *      description="Returns IN.9 - Surat Permintaan Keterangan based on id",
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
  *      path="/v1/entities/surat-permintaan-keterangan/add",
  *      operationId="addIN.9-SuratPermintaanKeterangan",
  *      tags={"surat-permintaan-keterangan"},
  *      summary="Insert new IN.9 - Surat Permintaan Keterangan",
  *      description="Insert new IN.9 - Surat Permintaan Keterangan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor":"Abc", "tglSurat":"Abc", "kepada":"Abc", "tglPelaksana":"Abc", "jaksaDitemui":"Abc", "untuk":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/surat-permintaan-keterangan/edit",
  *      operationId="editIN.9-SuratPermintaanKeterangan",
  *      tags={"surat-permintaan-keterangan"},
  *      summary="Edit an existing IN.9 - Surat Permintaan Keterangan",
  *      description="Edit an existing IN.9 - Surat Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor":"Abc", "tglSurat":"Abc", "kepada":"Abc", "tglPelaksana":"Abc", "jaksaDitemui":"Abc", "untuk":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/surat-permintaan-keterangan/delete",
  *      operationId="deleteIN.9-SuratPermintaanKeterangan",
  *      tags={"surat-permintaan-keterangan"},
  *      summary="Delete one record of IN.9 - Surat Permintaan Keterangan",
  *      description="Delete one record of IN.9 - Surat Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-permintaan-keterangan",
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
  *      path="/v1/entities/surat-permintaan-keterangan/delete-multiple",
  *      operationId="deleteMultipleIN.9-SuratPermintaanKeterangan",
  *      tags={"surat-permintaan-keterangan"},
  *      summary="Delete multiple record of IN.9 - Surat Permintaan Keterangan",
  *      description="Delete multiple record of IN.9 - Surat Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-permintaan-keterangan",
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
  *      path="/v1/entities/surat-permintaan-keterangan/sort",
  *      operationId="sortIN.9-SuratPermintaanKeterangan",
  *      tags={"surat-permintaan-keterangan"},
  *      summary="Sort existing IN.9 - Surat Permintaan Keterangan",
  *      description="Sort existing IN.9 - Surat Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="surat-permintaan-keterangan",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nomor":"Abc", "tglSurat":"Abc", "kepada":"Abc", "tglPelaksana":"Abc", "jaksaDitemui":"Abc", "untuk":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nomor":"Abc", "tglSurat":"Abc", "kepada":"Abc", "tglPelaksana":"Abc", "jaksaDitemui":"Abc", "untuk":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nomor"), 
  *                         @OA\Property(type="string", property="tglSurat"), 
  *                         @OA\Property(type="string", property="kepada"), 
  *                         @OA\Property(type="string", property="tglPelaksana"), 
  *                         @OA\Property(type="string", property="jaksaDitemui"), 
  *                         @OA\Property(type="string", property="untuk"), 
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