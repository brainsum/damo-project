#!/usr/bin/env bash

IMAGE_TAG=$(cat ./version.txt);
IMAGE="brainsum/damo-php:${IMAGE_TAG}"

echo "Building tag: ${IMAGE}"

docker build --rm -t "${IMAGE}" --build-arg BASE_IMAGE_TAG="${IMAGE_TAG}" .
