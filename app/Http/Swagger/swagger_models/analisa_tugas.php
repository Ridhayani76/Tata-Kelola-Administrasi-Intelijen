<?php

/**
  * @OA\Get(
  *      path="/v1/entities/analisa-tugas",
  *      operationId="browseIN.5-AnalisaTugas",
  *      tags={"analisa-tugas"},
  *      summary="Browse IN.5 - Analisa Tugas",
  *      description="Returns list of IN.5 - Analisa Tugas",
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
  *      path="/v1/entities/analisa-tugas/read?slug=analisa-tugas&id={id}",
  *      operationId="readIN.5-AnalisaTugas",
  *      tags={"analisa-tugas"},
  *      summary="Get IN.5 - Analisa Tugas based on id",
  *      description="Returns IN.5 - Analisa Tugas based on id",
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
  *      path="/v1/entities/analisa-tugas/add",
  *      operationId="addIN.5-AnalisaTugas",
  *      tags={"analisa-tugas"},
  *      summary="Insert new IN.5 - Analisa Tugas",
  *      description="Insert new IN.5 - Analisa Tugas into database",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"identifikasi":"Abc", "uraian":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "tertanda":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/analisa-tugas/edit",
  *      operationId="editIN.5-AnalisaTugas",
  *      tags={"analisa-tugas"},
  *      summary="Edit an existing IN.5 - Analisa Tugas",
  *      description="Edit an existing IN.5 - Analisa Tugas",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="data",
  *                     type="object",
  *                     example={"identifikasi":"Abc", "uraian":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "tertanda":"Abc", "berkas":"Abc"},
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
  *      path="/v1/entities/analisa-tugas/delete",
  *      operationId="deleteIN.5-AnalisaTugas",
  *      tags={"analisa-tugas"},
  *      summary="Delete one record of IN.5 - Analisa Tugas",
  *      description="Delete one record of IN.5 - Analisa Tugas",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="analisa-tugas",
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
  *      path="/v1/entities/analisa-tugas/delete-multiple",
  *      operationId="deleteMultipleIN.5-AnalisaTugas",
  *      tags={"analisa-tugas"},
  *      summary="Delete multiple record of IN.5 - Analisa Tugas",
  *      description="Delete multiple record of IN.5 - Analisa Tugas",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="analisa-tugas",
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
  *      path="/v1/entities/analisa-tugas/sort",
  *      operationId="sortIN.5-AnalisaTugas",
  *      tags={"analisa-tugas"},
  *      summary="Sort existing IN.5 - Analisa Tugas",
  *      description="Sort existing IN.5 - Analisa Tugas",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="analisa-tugas",
  *                     type="string"
  *                 ),
  *                 @OA\Property(
  *                     property="data",
  *                     type="array",
  *                     example={{"id":"123", "identifikasi":"Abc", "uraian":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "tertanda":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}, {"id":"123", "identifikasi":"Abc", "uraian":"Abc", "pelaksana":"Abc", "tglSurat":"Abc", "tertanda":"Abc", "berkas":"Abc", "createdAt":"2021-01-01T00:00:00.000Z", "updatedAt":"2021-01-01T00:00:00.000Z", "deletedAt":"2021-01-01T00:00:00.000Z"}},
  *                     @OA\Items(
  *                         type="object",
  *                         @OA\Property(type="integer", property="id"), 
  *                         @OA\Property(type="string", property="identifikasi"), 
  *                         @OA\Property(type="string", property="uraian"), 
  *                         @OA\Property(type="string", property="pelaksana"), 
  *                         @OA\Property(type="string", property="tglSurat"), 
  *                         @OA\Property(type="string", property="tertanda"), 
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