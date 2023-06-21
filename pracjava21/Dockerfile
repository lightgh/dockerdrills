FROM openjdk:21-jdk-buster as builder
WORKDIR /out


COPY *.java .

RUN javac Hello.java

CMD ["java", "Hello", "--version"]