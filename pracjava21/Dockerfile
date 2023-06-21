FROM openjdk:21-jdk-buster as builder
WORKDIR /out


COPY *.java .

RUN javac --release 21 --enable-preview Main.java

CMD ["java", "--enable-preview", "Main"]