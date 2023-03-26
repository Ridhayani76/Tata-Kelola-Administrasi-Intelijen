<?php

/**
  * @OA\Get(
  *      path="/v1/entities/rencana-penyelidikan",
  *      operationId="browseIN.7-RencanaPenyelidikan",
  *      tags={"rencana-penyelidikan"},
  *      summary="Browse IN.7 - Rencana Penyelidikan",
  *      description="Returns list of IN.7 - Rencana Penyelidikan",
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
  *      path="/v1/entities/rencana-penyelidikan/read?slug=rencana-penyelidikan&id={id}",
  *      operationId="readIN.7-RencanaPenyelidikan",
  *      tags={"rencana-penyelidikan"},
  *      summary="Get IN.7 - Rencana Penyelidikan based on id",
  *      description="Returns IN.7 - Rencana Penyelidikan based on id",
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
  *      path="/v1/entities/rencana-penyelidikan/add",
  *      operationId="addIN.7-RencanaPenyelidikan",
  *      tags={"rencana-penyelidikan"},
  *      summary="Insert new IN.7 - Rencana Penyelidikan",
  *      description="Insert new IN.7 - Rencana Penyelidikan into database",
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
  *      path="/v1/entities/rencana-penyelidikan/edit",
  *      operationId="editIN.7-RencanaPenyelidikan",
  *      tags={"rencana-penyelidikan"},
  *      summary="Edit an existing IN.7 - Rencana Penyelidikan",
  *      description="Edit an existing IN.7 - Rencana Penyelidikan",
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
  *      path="/v1/entities/rencana-penyelidikan/delete",
  *      operationId="deleteIN.7-RencanaPenyelidikan",
  *      tags={"rencana-penyelidikan"},
  *      summary="Delete one record of IN.7 - Rencana Penyelidikan",
  *      description="Delete one record of IN.7 - Rencana Penyelidikan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="rencana-penyelidikan",
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
  *      path="/v1/entities/rencana-penyelidikan/delete-multiple",
  *      operationId="deleteMultipleIN.7-RencanaPenyelidikan",
  *      tags={"rencana-penyelidikan"},
  *      summary="Delete multiple record of IN.7 - Rencana Penyelidikan",
  *      description="Delete multiple record of IN.7 - Rencana Penyelidikan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="rencana-penyelidikan",
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
  *      path="/v1/entities/rencana-penyelidikan/sort",
  *      operationId="sortIN.7-RencanaPenyelidikan",
  *      tags={"rencana-penyelidikan"},
  *      summary="Sort existing IN.7 - Rencana Penyelidikan",
  *      description="Sort existing IN.7 - Rencana Penyelidikan",
  *      @OA\RequestBody(
  *         @OA\MediaType(
  *             mediaType="application/json",
  *             @OA\Schema(
  *                 @OA\Property(
  *                     property="slug",
  *                     example="rencana-penyelidikan",
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