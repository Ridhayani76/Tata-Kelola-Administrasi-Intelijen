<?php

/**
  * @OA\Get(
  *      path="/v1/entities/rencana-pamgal",
  *      operationId="browseIN.8-RencanaPengamanan/RencanaPenggalangan",
  *      tags={"rencana-pamgal"},
  *      summary="Browse IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      description="Returns list of IN.8 - Rencana Pengamanan/Rencana Penggalangan",
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
  *      path="/v1/entities/rencana-pamgal/read?slug=rencana-pamgal&id={id}",
  *      operationId="readIN.8-RencanaPengamanan/RencanaPenggalangan",
  *      tags={"rencana-pamgal"},
  *      summary="Get IN.8 - Rencana Pengamanan/Rencana Penggalangan based on id",
  *      description="Returns IN.8 - Rencana Pengamanan/Rencana Penggalangan based on id",
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
  *      path="/v1/entities/rencana-pamgal/add",
  *      operationId="addIN.8-RencanaPengamanan/RencanaPenggalangan",
  *      tags={"rencana-pamgal"},
  *      summary="Insert new IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      description="Insert new IN.8 - Rencana Pengamanan/Rencana Penggalangan into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor":"Abc", "tentang":"Abc", "tglSurat":"Abc", "mengetahui":"Abc", "pelaksana":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/rencana-pamgal/edit",
  *      operationId="editIN.8-RencanaPengamanan/RencanaPenggalangan",
  *      tags={"rencana-pamgal"},
  *      summary="Edit an existing IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      description="Edit an existing IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"nomor":"Abc", "tentang":"Abc", "tglSurat":"Abc", "mengetahui":"Abc", "pelaksana":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/rencana-pamgal/delete",
  *      operationId="deleteIN.8-RencanaPengamanan/RencanaPenggalangan",
  *      tags={"rencana-pamgal"},
  *      summary="Delete one record of IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      description="Delete one record of IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="rencana-pamgal",
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
  *      path="/v1/entities/rencana-pamgal/delete-multiple",
  *      operationId="deleteMultipleIN.8-RencanaPengamanan/RencanaPenggalangan",
  *      tags={"rencana-pamgal"},
  *      summary="Delete multiple record of IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      description="Delete multiple record of IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="rencana-pamgal",
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
  *      path="/v1/entities/rencana-pamgal/sort",
  *      operationId="sortIN.8-RencanaPengamanan/RencanaPenggalangan",
  *      tags={"rencana-pamgal"},
  *      summary="Sort existing IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      description="Sort existing IN.8 - Rencana Pengamanan/Rencana Penggalangan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="rencana-pamgal",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "nomor":"Abc", "tentang":"Abc", "tglSurat":"Abc", "mengetahui":"Abc", "pelaksana":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "nomor":"Abc", "tentang":"Abc", "tglSurat":"Abc", "mengetahui":"Abc", "pelaksana":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="nomor"), 
  *                         @OA\Property(type="string", property="tentang"), 
  *                         @OA\Property(type="string", property="tglSurat"), 
  *                         @OA\Property(type="string", property="mengetahui"), 
  *                         @OA\Property(type="string", property="pelaksana"), 
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