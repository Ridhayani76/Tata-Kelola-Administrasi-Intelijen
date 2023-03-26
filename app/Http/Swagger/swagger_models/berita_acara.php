<?php

/**
  * @OA\Get(
  *      path="/v1/entities/berita-acara",
  *      operationId="browseIN.10-BeritaAcaraPermintaanKeterangan",
  *      tags={"berita-acara"},
  *      summary="Browse IN.10 - Berita Acara Permintaan Keterangan",
  *      description="Returns list of IN.10 - Berita Acara Permintaan Keterangan",
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
  *      path="/v1/entities/berita-acara/read?slug=berita-acara&id={id}",
  *      operationId="readIN.10-BeritaAcaraPermintaanKeterangan",
  *      tags={"berita-acara"},
  *      summary="Get IN.10 - Berita Acara Permintaan Keterangan based on id",
  *      description="Returns IN.10 - Berita Acara Permintaan Keterangan based on id",
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
  *      path="/v1/entities/berita-acara/add",
  *      operationId="addIN.10-BeritaAcaraPermintaanKeterangan",
  *      tags={"berita-acara"},
  *      summary="Insert new IN.10 - Berita Acara Permintaan Keterangan",
  *      description="Insert new IN.10 - Berita Acara Permintaan Keterangan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"suratPerintah":"", "tglBeritaAcara":"Abc", "jaksaBertugas":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/berita-acara/edit",
  *      operationId="editIN.10-BeritaAcaraPermintaanKeterangan",
  *      tags={"berita-acara"},
  *      summary="Edit an existing IN.10 - Berita Acara Permintaan Keterangan",
  *      description="Edit an existing IN.10 - Berita Acara Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"suratPerintah":"", "tglBeritaAcara":"Abc", "jaksaBertugas":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/berita-acara/delete",
  *      operationId="deleteIN.10-BeritaAcaraPermintaanKeterangan",
  *      tags={"berita-acara"},
  *      summary="Delete one record of IN.10 - Berita Acara Permintaan Keterangan",
  *      description="Delete one record of IN.10 - Berita Acara Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="berita-acara",
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
  *      path="/v1/entities/berita-acara/delete-multiple",
  *      operationId="deleteMultipleIN.10-BeritaAcaraPermintaanKeterangan",
  *      tags={"berita-acara"},
  *      summary="Delete multiple record of IN.10 - Berita Acara Permintaan Keterangan",
  *      description="Delete multiple record of IN.10 - Berita Acara Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="berita-acara",
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
  *      path="/v1/entities/berita-acara/sort",
  *      operationId="sortIN.10-BeritaAcaraPermintaanKeterangan",
  *      tags={"berita-acara"},
  *      summary="Sort existing IN.10 - Berita Acara Permintaan Keterangan",
  *      description="Sort existing IN.10 - Berita Acara Permintaan Keterangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="berita-acara",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "suratPerintah":"", "tglBeritaAcara":"Abc", "jaksaBertugas":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "suratPerintah":"", "tglBeritaAcara":"Abc", "jaksaBertugas":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="suratPerintah"), 
  *                         @OA\Property(type="string", property="tglBeritaAcara"), 
  *                         @OA\Property(type="string", property="jaksaBertugas"), 
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