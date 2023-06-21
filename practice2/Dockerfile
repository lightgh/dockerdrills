# Use an image with the SDK for compilation
FROM openjdk:8-jdk-alpine As builder
WORKDIR /out

#Get the source code inside the image
COPY *.java .

#Compile the source code
RUN javac Hello.java

#create a lightweight image
FROM openjdk:8-jre-alpine

# Copy the compiled artifacts from previous image
COPY --from=builder /out/*.class .
CMD ["java", "Hello"]