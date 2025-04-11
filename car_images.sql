select "car_images".*
from "car_images"
         inner join (select MAX("car_images"."id")       as "id_aggregate",
                            min("car_images"."position") as "position_aggregate",
                            "car_images"."car_id"
                     from "car_images"
                              inner join (select MIN("car_images"."position") as "position_aggregate",
                                                 "car_images"."car_id"
                                          from "car_images"
                                          where "car_images"."car_id" in
                                                (1, 6, 7, 8, 11, 14, 18, 20, 21, 22, 25, 31, 32, 36, 37, 43, 45, 50, 56,
                                                 62, 65, 68, 69, 78, 80, 85, 92, 93, 94, 100)
                                          group by "car_images"."car_id") as "oldestOfMany"
                                         on "oldestOfMany"."position_aggregate" = "car_images"."position" and
                                            "oldestOfMany"."car_id" = "car_images"."car_id"
                     group by "car_images"."car_id") as "oldestOfMany"
                    on "oldestOfMany"."id_aggregate" = "car_images"."id" and
                       "oldestOfMany"."position_aggregate" = "car_images"."position" and
                       "oldestOfMany"."car_id" = "car_images"."car_id"